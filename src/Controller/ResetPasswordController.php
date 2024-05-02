<?php

namespace App\Controller;



use App\Entity\Utilisateur;
use App\Form\ChangePasswordFormType;
use App\Form\ResetPasswordRequestFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use SymfonyCasts\Bundle\ResetPassword\Controller\ResetPasswordControllerTrait;
use SymfonyCasts\Bundle\ResetPassword\Exception\ResetPasswordExceptionInterface;
use SymfonyCasts\Bundle\ResetPassword\ResetPasswordHelperInterface;

#[Route('/reset-password')]
class ResetPasswordController extends AbstractController
{
    use ResetPasswordControllerTrait;
  


    // Injection de dépendances dans le constructeur
    public function __construct(
        private ResetPasswordHelperInterface $resetPasswordHelper,
        private EntityManagerInterface $entityManager,
        private MailerInterface $mailer // Injection de MailerInterface
    ) {
        // Initialisation des dépendances
    }

    #[Route('', name: 'app_forgot_password_request')]
    public function request(Request $request, TranslatorInterface $translator): Response
    {
        // Création du formulaire de demande de réinitialisation de mot de passe
        $form = $this->createForm(ResetPasswordRequestFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Traiter l'envoi de l'email de réinitialisation de mot de passe
            return $this->processSendingPasswordResetEmail(
                $form->get('email')->getData(),
                $translator
            );
        }

        // Rendre le formulaire de demande
        return $this->render('reset_password/request.html.twig', [
            'requestForm' => $form->createView(),
        ]);
    }

    #[Route('/check-email', name: 'app_check_email')]
    public function checkEmail(): Response
    {
        // Vérification du jeton dans la session
        $resetToken = $this->getTokenObjectFromSession() ?? $this->resetPasswordHelper->generateFakeResetToken();

        // Rendre la page de vérification d'email
        return $this->render('reset_password/check_email.html.twig', [
            'resetToken' => $resetToken,
        ]);
    }

    #[Route('/reset/{token}', name: 'app_reset_password')]

    public function reset(Request $request, UserPasswordHasherInterface $passwordHasher, TranslatorInterface $translator, string $token = null): Response
    {
        // Si un jeton est fourni, le stocker dans la session
        if ($token) {
            $this->storeTokenInSession($token);
            return $this->redirectToRoute('app_reset_password');
        }

        // Récupérer le jeton de la session
        $token = $this->getTokenFromSession();
        if (null === $token) {
            throw $this->createNotFoundException('Aucun jeton de réinitialisation de mot de passe trouvé dans l\'URL ou la session.');
        }

        // Valider le jeton et récupérer l'utilisateur
        try {
            $user = $this->resetPasswordHelper->validateTokenAndFetchUser($token);
        } catch (ResetPasswordExceptionInterface $e) {
            $this->addFlash('reset_password_error', sprintf(
                '%s - %s',
                $translator->trans(ResetPasswordExceptionInterface::MESSAGE_PROBLEM_VALIDATE, [], 'ResetPasswordBundle'),
                $translator->trans($e->getReason(), [], 'ResetPasswordBundle')
            ));

            return $this->redirectToRoute('app_forgot_password_request');
        }

        // Créer et traiter le formulaire de changement de mot de passe
        $form = $this->createForm(ChangePasswordFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            // Retirer la demande de réinitialisation de mot de passe
            $this->resetPasswordHelper->removeResetRequest($token);

            // Hacher le nouveau mot de passe et l'enregistrer pour l'utilisateur
            $encodedPassword = $passwordHasher->hashPassword(
                $user,
                $form->get('plainPassword')->getData()
            );

            $user->setPassword($encodedPassword);
            $this->entityManager->flush();

            // Nettoyer la session après la réinitialisation
            $this->cleanSessionAfterReset();

            return $this->redirectToRoute('app_hello');
        }

        // Rendre le formulaire de réinitialisation de mot de passe
        return $this->render('reset_password/reset.html.twig', [
            'resetForm' => $form->createView(),
        ]);
    }

    // Méthode pour traiter l'envoi de l'email de réinitialisation de mot de passe
    private function processSendingPasswordResetEmail(string $emailFormData, TranslatorInterface $translator): RedirectResponse
    {
        // Recherche de l'utilisateur par email
        $user = $this->entityManager->getRepository(Utilisateur::class)->findOneBy(['email' => $emailFormData]);
        
        if (!$user) {
            return $this->redirectToRoute('app_check_email');
        }
        
        try {
            $resetToken = $this->resetPasswordHelper->generateResetToken($user);
        } catch (ResetPasswordExceptionInterface $e) {
            return $this->redirectToRoute('app_check_email');
        }
        
        // Créez l'email avec le token de réinitialisation
        $email = (new TemplatedEmail())
        ->from(new Address('achrefsaadaoui28@gmail.com', 'Security'))
        ->to($user->getEmail())
        ->subject('Demande de réinitialisation de mot de passe')
        ->htmlTemplate('reset_password/email.html.twig')
        ->context([
            'resetToken' => $resetToken,
        ]);
    
        
        // Envoyez l'email
        try {
            $this->mailer->send($email);
        } catch (\Exception $e) {
            $this->addFlash('error', 'Erreur lors de l\'envoi de l\'email.');
            return $this->redirectToRoute('app_check_email');
        }
        
        // Stockez le token dans la session
        $this->setTokenObjectInSession($resetToken);
        return $this->redirectToRoute('app_check_email');
    }
} 