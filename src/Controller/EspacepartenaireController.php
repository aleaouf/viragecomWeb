<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

use App\Entity\Categorie;
use App\Entity\Type;
use App\Entity\Espacepartenaire;
use App\Form\CategorieType;
use App\Form\EspacepartenaireType;
use App\Form\TypeType;
use App\Repository\CategorieRepository;
use App\Repository\EspacepartenaireRepository;
use App\Repository\TypeRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Twilio\Rest\Client;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Knp\Component\Pager\PaginatorInterface;
#[Route('/espacepartenaire')]
class EspacepartenaireController extends AbstractController
{
    
    
    #[Route('/notreEspace', name: 'app_espacepartenaire_show_accepted', methods: ['GET'])]
    public function showAcceptedEspacepartenaires(Request $request, EspacepartenaireRepository $espacepartenaireRepository,  PaginatorInterface $paginator): Response
    {
        $query = $request->query->get('query');
        $acceptedEspacepartenaires = [];

        if ($query) {
            $acceptedEspacepartenaires = $espacepartenaireRepository->searchAcceptedByNameOrType($query);
        } else {
            $acceptedEspacepartenaires = $espacepartenaireRepository->findBy(['accepted' => true]);
        }

        $acceptedEspacepartenaires = $paginator->paginate(
            $acceptedEspacepartenaires, /* query NOT result */
            $request->query->getInt('page', 1),
            3
        );

        return $this->render('espacepartenaire/show_accepted.html.twig', [
            'acceptedEspacepartenaires' => $acceptedEspacepartenaires,
        ]);
    }


    #[Route('/new', name: 'app_new_espacepartenaire', methods: ['GET', 'POST'])]
    public function newEspacepartenaire(Request $request, EntityManagerInterface $entityManager): Response
    {
        $espacepartenaire = new Espacepartenaire();
        $categorie = new Categorie();
    
        $form = $this->createFormBuilder(['espacepartenaire' => $espacepartenaire, 'categorie' => $categorie])
        
            ->add('espacepartenaire', EspacepartenaireType::class)
            ->add('categorie', CategorieType::class)
            ->add('save', SubmitType::class, ['label' => 'Create Espacepartenaire'])
            ->getForm();
    
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $formData = $form->getData();
            $categorie = $formData['categorie'];
            
            $espacepartenaire->setCategorie($categorie);


            $localisation = $form->get('espacepartenaire')['localisation']->getData();  // Assurez-vous que ce champ est bien nommé dans votre formulaire
        if ($localisation) {
            $espacepartenaire->setLocalisation($localisation);  // Assurez-vous que la méthode setAddress existe dans votre entité Tournoi
        }
            $photo = $form->get('espacepartenaire')['photos']->getData();
            if ($photo) {
                $newFilename = uniqid().'.'.$photo->guessExtension();
                $photo->move(
                    $this->getParameter('photos_directory'),
                    $newFilename
                );
                $espacepartenaire->setPhotos($newFilename);
            }
        
            $entityManager->persist($espacepartenaire);
            $entityManager->flush();
    
            return $this->redirectToRoute('app_espacepartenaire_show_accepted', [], Response::HTTP_SEE_OTHER);
        }
    
        return $this->renderForm('espacepartenaire/new.html.twig', [
            'form' => $form,
        ]);
    }

 

    #[Route('/Admin', name: 'app_espacepartenaire_index', methods: ['GET'])]
    public function indexEspacepartenaire(EspacepartenaireRepository $espacepartenaireRepository): Response
    {
        return $this->render('espacepartenaire/index.html.twig', [
            'espacepartenaires' => $espacepartenaireRepository->findAll(),
        ]);
    }
    
    #[Route('/{idEspace}/accept', name: 'app_espacepartenaire_accept', methods: ['POST'])]
    public function acceptEspacepartenaire(Espacepartenaire $espacepartenaire, EntityManagerInterface $entityManager): Response
    {  $accountSid = $_ENV['TWILIO_ACCOUNT_SID'];
        $authToken = $_ENV['TWILIO_AUTH_TOKEN'];
        $twilioPhoneNumber = $_ENV['TWILIO_NUMBER'];
        $twilio = new Client($accountSid, $authToken); 
        
        $espacepartenaire->setAccepted(true);
        $entityManager->flush();

       
        /*userPhone = $user->getPhone();
        if (!str_starts_with($userPhone, '+')) {
            $userPhone = '+216' . $userPhone;  // Prefix for Tunisia if not already prefixed
        }*/

        $message = $twilio->messages
        ->create(
            "+21624327573", // Destination phone number from the form
            [
                'from' => $twilioPhoneNumber, // Your Twilio phone number
                'body' => "Votre espace partenaire  {$espacepartenaire->getNom()}, Adresse: {$espacepartenaire->getLocalisation()} a été accepté"
            ]
        );

        return $this->redirectToRoute('app_espacepartenaire_show', ['idEspace' => $espacepartenaire->getIdEspace()]);

    }

    #[Route('/{idEspace}/edit', name: 'app_espacepartenaire_edit', methods: ['GET', 'POST'])]
    public function editEspacepartenaire(Request $request, Espacepartenaire $espacepartenaire, EntityManagerInterface $entityManager, CategorieRepository $categorieRepository): Response
    {
        $form = $this->createFormBuilder(['espacepartenaire' => $espacepartenaire])
            ->add('espacepartenaire', EspacepartenaireType::class)
            ->add('categorie', CategorieType::class)
            ->add('save', SubmitType::class, ['label' => 'Update Espacepartenaire'])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $formData = $form->getData();
            
            $photo = $form->get('espacepartenaire')['photos']->getData();
            if ($photo) {
                $newFilename = uniqid().'.'.$photo->guessExtension();
                $photo->move(
                    $this->getParameter('photos_directory'),
                    $newFilename
                );
                $formData['espacepartenaire']->setPhotos($newFilename);
            }

            $categorie = $formData['categorie'];
            $espacepartenaire->setCategorie($categorie);

            if ($categorie->getIdCategorie() === null) {
                $entityManager->persist($categorie);
            }

            $entityManager->flush();

            return $this->redirectToRoute('app_espacepartenaire_show_accepted', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('espacepartenaire/edit.html.twig', [
            'espacepartenaire' => $espacepartenaire,
            'form' => $form,
        ]);
    }
    #[Route('/{idEspace}', name: 'app_espacepartenaire_show', methods: ['GET'])]
    public function showEspacepartenaire(Espacepartenaire $espacepartenaire, CategorieRepository $categorieRepository): Response
    {
        $categorie = $categorieRepository->findOneByIdCategorie($espacepartenaire->getIdCategorie());
    
        return $this->render('espacepartenaire/show.html.twig', [
            'espacepartenaire' => $espacepartenaire,
            'categorie' => $categorie,
        ]);
    }
    #[Route('/{idEspace}', name: 'app_espacepartenaire_delete', methods: ['POST'])]
    public function deleteEspacepartenaire(Request $request, Espacepartenaire $espacepartenaire, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$espacepartenaire->getIdEspace(), $request->request->get('_token'))) {
            $entityManager->remove($espacepartenaire);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_espacepartenaire_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/user/{userId}', name: 'app_espacepartenaire_show_user', methods: ['GET'])]
    public function showEspacepartenairesForUser(EspacepartenaireRepository $espacepartenaireRepository, $userId): Response
    {
        $espacepartenaires = $espacepartenaireRepository->findBy(['idUser' => $userId]);

        return $this->render('espacepartenaire/show_for_user.html.twig', [
            'espacepartenaires' => $espacepartenaires,
        ]);
    }

   

    #[Route('/notreEspace/{idEspace}', name: 'app_espacepartenaire_usershow', methods: ['GET'])]
    public function showEspacepartenaire1(Espacepartenaire $espacepartenaire, CategorieRepository $categorieRepository): Response
    {
        $categorie = $categorieRepository->findOneByIdCategorie($espacepartenaire->getIdCategorie());
    
        return $this->render('espacepartenaire/usershow.html.twig', [
            'espacepartenaire' => $espacepartenaire,
            'categorie' => $categorie,
        ]);
    }

 
}
