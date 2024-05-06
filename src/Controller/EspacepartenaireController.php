<?php

namespace App\Controller;
use App\Entity\Evenement;
use App\Form\EvenementType;
use App\Repository\EvenementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use App\Entity\Categorie;
use App\Entity\Espacepartenaire;
use App\Form\CategorieType;
use App\Form\EspacepartenaireType;
use App\Repository\CategorieRepository;
use App\Repository\EspacepartenaireRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Knp\Component\Pager\PaginatorInterface;

#[Route('/espacepartenaire')]
class EspacepartenaireController extends AbstractController
{
    private $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    #[Route('/notreEspace', name: 'app_espacepartenaire_show_accepted', methods: ['GET'])]
    public function showAcceptedEspacepartenaires(Request $request, EspacepartenaireRepository $espacepartenaireRepository, PaginatorInterface $paginator): Response
    {
        $query = $request->query->get('query');
        $acceptedEspacepartenaires = [];

        if ($query) {
            $acceptedEspacepartenaires = $espacepartenaireRepository->searchAcceptedByNameOrType($query);
        } else {
            $acceptedEspacepartenaires = $espacepartenaireRepository->findBy(['accepted' => true]);
        }

        $acceptedEspacepartenaires = $paginator->paginate(
            $acceptedEspacepartenaires,
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
            $user = $this->getUser();
            if ($user) {
                $espacepartenaire->setId($user->getId());
            }
        
            $entityManager->persist($espacepartenaire);
            $entityManager->flush();
    
            return $this->redirectToRoute('app_espacepartenaire_show_accepted', [], Response::HTTP_SEE_OTHER);
        }
    
        return $this->renderForm('espacepartenaire/new.html.twig', [
            'form' => $form,
        ]);
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
            
            $categorie = $formData['categorie'];
            $espacepartenaire->setCategorie($categorie);

            // Get the currently logged-in user
            $user = $this->getUser();
            if ($user) {
                $espacepartenaire->setId($user->getId());
            }

            if ($categorie->getIdCategorie() === null) {
                $entityManager->persist($categorie);
            }

            $entityManager->flush();

            return $this->redirectToRoute('app_espacepartenaire_show_user', ['userId' => $this->getUser()->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('espacepartenaire/edit.html.twig', [
            'espacepartenaire' => $espacepartenaire,
            'form' => $form,
        ]);
    }

    #[Route('/{idEspace}', name: 'app_espacepartenaire_delete', methods: ['POST'])]
    public function deleteEspacepartenaire(Request $request, Espacepartenaire $espacepartenaire, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$espacepartenaire->getIdEspace(), $request->request->get('_token'))) {
            $entityManager->remove($espacepartenaire);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_espacepartenaire_show_user', ['userId' => $this->getUser()->getId()], Response::HTTP_SEE_OTHER);
    }

    #[Route('/user/{userId}', name: 'app_espacepartenaire_show_user', methods: ['GET'])]
    public function showEspacepartenairesForUser(EspacepartenaireRepository $espacepartenaireRepository, $userId): Response
    {
        $espacepartenaires = $espacepartenaireRepository->findBy(['id' => $userId]);

        return $this->render('espacepartenaire/show_for_user.html.twig', [
            'espacepartenaires' => $espacepartenaires,
        ]);
    }

    #[Route('/notreEspace/{idEspace}', name: 'app_espacepartenaire_usershow', methods: ['GET'])]
    public function showEspacepartenaire(Espacepartenaire $espacepartenaire): Response
    {
        return $this->render('espacepartenaire/usershow.html.twig', [
            'espacepartenaire' => $espacepartenaire,
        ]);
    }

    #[Route('/espacepartenaire/increment-click/{id}', name: 'espacepartenaire_increment_click', methods: ['POST'])]
    public function incrementClickAction(Espacepartenaire $espacepartenaire, EntityManagerInterface $entityManager): JsonResponse
    {
        $espacepartenaire->setNbclick($espacepartenaire->getNbclick() + 1);
        $entityManager->flush();

        return $this->json(['nbclick' => $espacepartenaire->getNbclick()]);
    }
}

