<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Form\EvenementType;
use App\Repository\EvenementRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Espacepartenaire;
use Knp\Component\Pager\PaginatorInterface;


#[Route('/evenement')]
class EvenementController extends AbstractController
{
    #[Route('/Admin', name: 'app_evenement_index', methods: ['GET'])]
    public function index(EvenementRepository $evenementRepository, Request $request, PaginatorInterface $paginator): Response
    {
        $query = $evenementRepository->createQueryBuilder('e')->getQuery();

        $pagination = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1), // Get the current page from the request, default to 1
            10 // Limit the number of items per page to 10
        );

        return $this->render('evenement/index.html.twig', [
            'pagination' => $pagination,
        ]);
    }
    #[Route('/', name: 'app_evenement_Client', methods: ['GET'])]
    public function Event(EvenementRepository $evenementRepository, Request $request, PaginatorInterface $paginator): Response
    {
        $query = $evenementRepository->createQueryBuilder('e')->getQuery();

        $pagination = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1), // Get the current page from the request, default to 1
            10 // Limit the number of items per page to 10
        );

        return $this->render('evenement/evenement.html.twig', [
            'pagination' => $pagination,
        ]);
    }

    #[Route('/new', name: 'app_evenement_new', methods: ['GET', 'POST'])]
    
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $evenement = new Evenement();
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            // Check for bad words in the description
            $description = $evenement->getDescription();
    
            // Your API integration code for bad word filtering
            $apiUrl = 'https://neutrinoapi-bad-word-filter.p.rapidapi.com/bad-word-filter';
            $apiKey = 'f7c896e1e7mshe32b8b0fce6109fp1dc01cjsne1e4ce8c7703'; // Replace with your actual API key
            $headers = [
                'X-RapidAPI-Key: ' . $apiKey,
                'X-RapidAPI-Host: neutrinoapi-bad-word-filter.p.rapidapi.com',
                'Content-Type: application/x-www-form-urlencoded'
            ];
            $data = http_build_query(['content' => $description]);
            $curl = curl_init();
            curl_setopt_array($curl, [
                CURLOPT_URL => $apiUrl,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_POST => true,
                CURLOPT_POSTFIELDS => $data,
                CURLOPT_HTTPHEADER => $headers,
            ]);
    
            $response = curl_exec($curl);
            $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            curl_close($curl);
    
            // Handle API response
            if ($httpCode === 200) {
                $responseData = json_decode($response, true);
    
                // Check if bad words are detected
                if ($responseData['is-bad'] === true) {
                    // Display a warning message to the user
                    $this->addFlash('warning', 'Your content contains inappropriate language. Please revise it before submitting.');
                    // Redirect back to the form
                    return $this->redirectToRoute('app_evenement_new');
                }
            } else {
                // Handle API error
                $this->addFlash('error', 'An error occurred while checking the content. Please try again later.');
                // Redirect back to the form
                return $this->redirectToRoute('app_evenement_new');
            }
    
            // If no bad words are detected, proceed to persist the evenement
            $entityManager->persist($evenement);
            $entityManager->flush();
    
            // Redirect to success route
            return $this->redirectToRoute('app_evenement_index');
        }
    
        return $this->renderForm('evenement/new.html.twig', [
            'evenement' => $evenement,
            'form' => $form,
        ]);
    }
    

    #[Route('/{idEvent}', name: 'app_evenement_show', methods: ['GET'])]
    public function show(Evenement $evenement): Response
    {
        return $this->render('evenement/show.html.twig', [
            'evenement' => $evenement,
        ]);
    }

    #[Route('/{idEvent}/edit', name: 'app_evenement_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Evenement $evenement, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_evenement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('evenement/edit.html.twig', [
            'evenement' => $evenement,
            'form' => $form,
        ]);
    }

    #[Route('/{idEvent}', name: 'app_evenement_delete', methods: ['POST'])]
    public function delete(Request $request, Evenement $evenement, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$evenement->getIdEvent(), $request->request->get('_token'))) {
            $entityManager->remove($evenement);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_evenement_index', [], Response::HTTP_SEE_OTHER);
        
    }
}
