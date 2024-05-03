<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Espacepartenaire;
use App\Entity\Categorie;
use App\Form\CategorieType;
use App\Repository\CategorieRepository;

use App\Repository\EspacepartenaireRepository;
use App\Repository\UtilisateurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Twilio\Rest\Client; // Assuming you're using Twilio for SMS notifications

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
    public function banUser(UtilisateurRepository $utilisateur, EntityManagerInterface $entityManager, MailerInterface $mailer): Response
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
    public function unbanUser(UtilisateurRepository $utilisateur, EntityManagerInterface $entityManager): Response
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
    #[Route('/backoffice/espacepartenaires', name: 'app_espacepartenaire', methods: ['GET'])]
    public function indexEspacepartenaire(EspacepartenaireRepository $espacepartenaireRepository, Request $request): Response
    {
        $query = $request->query->get('query', '');
        $sort = $request->query->get('sort', '');

        if (!empty($query)) {
            // Perform search by name or type if query parameter is present
            $espacepartenaires = $espacepartenaireRepository->searchAllByNameOrType($query);
        } else {
            // Fetch all Espacepartenaires if no query parameter
            $espacepartenaires = $espacepartenaireRepository->findAll();
        }

        if ($sort === 'nbclick') {
            $espacepartenaires = $espacepartenaireRepository->findAllSortedByNbClick();
        } elseif ($sort === 'nom') {
            $espacepartenaires = $espacepartenaireRepository->findAllSortedByNom();
        } elseif ($sort === 'accepted') {
            $espacepartenaires = $espacepartenaireRepository->findNotAccepted();
        }

        return $this->render('backoffice/EspacePar.html.twig', [
            'espacepartenaires' => $espacepartenaires,
            'query' => $query,
            'sort' => $sort,
        ]);
    }

    #[Route('/backoffice/espacepartenaire/{idEspace}/delete', name: 'app_espacepartenaire_remove', methods: ['POST'])]
    public function deleteEspacepartenaire1(Request $request, Espacepartenaire $espacepartenaire, EntityManagerInterface $entityManager): Response
    {
        // Validate CSRF token
        if ($this->isCsrfTokenValid('delete' . $espacepartenaire->getIdEspace(), $request->request->get('_token'))) {
            // Remove the Espacepartenaire
            $entityManager->remove($espacepartenaire);
            $entityManager->flush();
    
            // Flash success message
            $this->addFlash('success', 'Espacepartenaire deleted successfully.');
        } else {
            // Flash error message for invalid CSRF token
            $this->addFlash('error', 'Invalid CSRF token. Espacepartenaire deletion failed.');
        }
    
        // Redirect back to the espacepartenaire index page
        return $this->redirectToRoute('app_espacepartenaire');
    }

    #[Route('/backoffice/espacepartenaire/{idEspace}/accept', name: 'app_espacepartenaire_accept', methods: ['POST'])]
    public function acceptEspacepartenaire(Espacepartenaire $espacepartenaire, EntityManagerInterface $entityManager): Response
    {
        $espacepartenaire->setAccepted(true);
        $entityManager->flush();

        // Add Twilio integration to send SMS notification
        $accountSid = $_ENV['TWILIO_ACCOUNT_SID'];
        $authToken = $_ENV['TWILIO_AUTH_TOKEN'];
        $twilioPhoneNumber = $_ENV['TWILIO_NUMBER'];

        $twilio = new Client($accountSid, $authToken);
        $message = $twilio->messages
        ->create(
            "+21624327573", // Destination phone number from the form
            [
                'from' => $twilioPhoneNumber, // Your Twilio phone number
                'body' => "Votre espace partenaire  {$espacepartenaire->getNom()}, Adresse: {$espacepartenaire->getLocalisation()} a été accepté"
            ]
        );

        $this->addFlash('success', 'Espace partenaire accepted successfully.');

        return $this->redirectToRoute('app_espacepartenaire');
    }
    #[Route('/backoffice/{idEspace}', name: 'app_espacepartenaire_show', methods: ['GET'])]
    public function showEspacepartenaire(Espacepartenaire $espacepartenaire, CategorieRepository $categorieRepository): Response
    {
        $categorie = $categorieRepository->findOneByIdCategorie($espacepartenaire->getIdCategorie());
    
        return $this->render('backoffice/show.html.twig', [
            'espacepartenaire' => $espacepartenaire,
            'categorie' => $categorie,
        ]);
    }
}
