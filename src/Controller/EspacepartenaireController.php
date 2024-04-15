<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Espacepartenaire;
use App\Form\CategorieType;
use App\Form\EspacepartenaireType;
use App\Repository\CategorieRepository;
use App\Repository\EspacepartenaireRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/espacepartenaire')]
class EspacepartenaireController extends AbstractController
{
    #[Route('/notreEspace', name: 'app_espacepartenaire_show_accepted', methods: ['GET'])]
    public function showAcceptedEspacepartenaires(EspacepartenaireRepository $espacepartenaireRepository): Response
    {
        $acceptedEspacepartenaires = $espacepartenaireRepository->findBy(['accepted' => true]);
    
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
    
            return $this->redirectToRoute('app_espacepartenaire_index', [], Response::HTTP_SEE_OTHER);
        }
    
        return $this->renderForm('espacepartenaire/new.html.twig', [
            'form' => $form,
        ]);
    }

    #[Route('/categorie/new', name: 'app_categorie_new', methods: ['GET', 'POST'])]
    public function newCategorie(Request $request, EntityManagerInterface $entityManager): Response
    {
        $categorie = new Categorie();
        $form = $this->createForm(CategorieType::class, $categorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($categorie);
            $entityManager->flush();

            return $this->redirectToRoute('app_categorie_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('categorie/new.html.twig', [
            'categorie' => $categorie,
            'form' => $form,
        ]);
    }

    #[Route('/categorie/{idCategorie}', name: 'app_categorie_show', methods: ['GET'])]
    public function showCategorie(Categorie $categorie): Response
    {
        return $this->render('categorie/show.html.twig', [
            'categorie' => $categorie,
        ]);
    }

    #[Route('/categorie/{idCategorie}/edit', name: 'app_categorie_edit', methods: ['GET', 'POST'])]
    public function editCategorie(Request $request, Categorie $categorie, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CategorieType::class, $categorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_categorie_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('categorie/edit.html.twig', [
            'categorie' => $categorie,
            'form' => $form,
        ]);
    }

    #[Route('/categorie/{idCategorie}', name: 'app_categorie_delete', methods: ['POST'])]
    public function deleteCategorie(Request $request, Categorie $categorie, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$categorie->getIdCategorie(), $request->request->get('_token'))) {
            $entityManager->remove($categorie);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_categorie_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/', name: 'app_espacepartenaire_index', methods: ['GET'])]
    public function indexEspacepartenaire(EspacepartenaireRepository $espacepartenaireRepository): Response
    {
        return $this->render('espacepartenaire/index.html.twig', [
            'espacepartenaires' => $espacepartenaireRepository->findAll(),
        ]);
    }
    
    #[Route('/{idEspace}/accept', name: 'app_espacepartenaire_accept', methods: ['POST'])]
    public function acceptEspacepartenaire(Espacepartenaire $espacepartenaire, EntityManagerInterface $entityManager): Response
    {
        $espacepartenaire->setAccepted(true);
        $entityManager->flush();
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

            return $this->redirectToRoute('app_espacepartenaire_index', [], Response::HTTP_SEE_OTHER);
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

    #[Route('/categorie', name: 'app_categorie_index', methods: ['GET'])]
    public function index(CategorieRepository $categorieRepository): Response
    {
        return $this->render('categorie/index.html.twig', [
            'categories' => $categorieRepository->findAll(),
        ]);
    }
  
}
