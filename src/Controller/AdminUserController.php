<?php
namespace App\Controller;

use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Utilisateur;
use App\Repository\UtilisateurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminUserController extends AbstractController
{
    #[Route('/backoffice', name: 'app_utilisateur_backoffice_dashboard', methods: ['GET'])]
    public function backofficeDashboard(UtilisateurRepository $utilisateurRepository): Response
    {
        return $this->render('backoffice/user/index.html.twig', [
            'utilisateurs' => $utilisateurRepository->findAll(),
        ]);
    }

    #[Route('/backoffice/list', name: 'app_utilisateur_index', methods: ['GET'])]
    public function index(UtilisateurRepository $utilisateurRepository): Response
    {
        return $this->render('backoffice/user/index.html.twig', [
            'utilisateurs' => $utilisateurRepository->findAll(),
        ]);
    }

    #[Route('/backoffice/user/{id}/ban', name: 'admin_user_ban', methods: ['POST'])]
    public function banUser(Utilisateur $utilisateur, EntityManagerInterface $entityManager, MailerInterface $mailer): Response
    {
        // Bannir l'utilisateur
        $utilisateur->setBanned(true);
        $entityManager->flush();

        // Créer et envoyer l'e-mail de bannissement
        $email = (new TemplatedEmail())
            ->from(new Address('achrefsaadaoui28@gmail.com', 'Administration'))
            ->to($utilisateur->getEmail())
            ->subject('Avis de bannissement de votre compte')
            ->htmlTemplate('backoffice/send-ban-emails.html.twig')
            ->context([
                'message' => 'Votre compte a été banni. Si vous pensez qu\'il s\'agit d\'une erreur, veuillez contacter notre support.',
                'user' => $utilisateur, // Passez l'utilisateur banni comme contexte
                // Vous pouvez ajouter d'autres données contextuelles ici si nécessaire
            ]);

        try {
            $mailer->send($email);
        } catch (\Exception $e) {
            // Gérez les erreurs d'envoi d'email ici
            error_log('Erreur lors de l\'envoi d\'e-mail à ' . $utilisateur->getEmail() . ': ' . $e->getMessage());
        }

        // Rediriger après le bannissement
        return $this->redirectToRoute('app_utilisateur_index');
    }

    #[Route('/backoffice/user/{id}/unban', name: 'admin_user_unban', methods: ['POST'])]
    public function unbanUser(Utilisateur $utilisateur, EntityManagerInterface $entityManager): Response
    {
        $utilisateur->setBanned(false);
        $entityManager->flush();

        return $this->redirectToRoute('app_utilisateur_index');
    }

    #[Route('/backoffice/user-age-statistics', name: 'admin_user_age_statistics', methods: ['GET'])]
    public function userAgeStatistics(UtilisateurRepository $utilisateurRepository): Response
    {
        // Calculer le nombre d'utilisateurs dans chaque tranche d'âge
        $under18 = $utilisateurRepository->countByAgeRange(0, 17);
        $between19And26 = $utilisateurRepository->countByAgeRange(19, 26);
        $over27 = $utilisateurRepository->countByAgeRange(27, 120);

        // Renvoyer les données à la vue Twig
        return $this->render('backoffice/user/age_statistics.html.twig', [
            'under18' => $under18,
            'between19And26' => $between19And26,
            'over27' => $over27,
        ]);
    }
}
