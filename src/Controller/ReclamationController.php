<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Entity\Utilisateur;
use App\Form\ReclamationType;
use App\Repository\ReclamationRepository;
use App\Repository\UtilisateurRepository;
use App\Service\BadWordFilter;
use Doctrine\ORM\EntityManagerInterface;
use PhpParser\Node\Expr\Cast\String_;
use SebastianBergmann\Environment\Console;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

#[Route('/reclamation')]
class ReclamationController extends AbstractController
{
    private $security;

    private BadWordFilter $badWordFilter;

    private Utilisateur $userConnected;


    public function __construct(
        UtilisateurRepository $utilisateurRepository,
        BadWordFilter $badWordFilter,
        Security $security,
        AuthenticationUtils $authenticationUtils
    ) {
        $this->badWordFilter = $badWordFilter;
        $this->security = $security;
    
        $email = $authenticationUtils->getLastUsername();
        $user = $utilisateurRepository->findOneByEmail($email);
    
        if ($user instanceof Utilisateur) {
            // If a single user is found by email, assign it to $this->userConnected
            $this->userConnected = $user;
        } else {
            // Handle the case where user is not found or multiple users are found
            $message = ($user === null) ? 'User not found for the given email.' : 'Multiple users found for the given email.';
            throw new \RuntimeException($message);
        }
    }
    


   


  
 



    #[Route('/admin', name: 'app_reclamation_index', methods: ['GET'])]
    public function indexAdmin(ReclamationRepository $reclamationRepository): Response
    {
        return $this->render('reclamation/indexAdmin.html.twig', [
            'reclamations' => $reclamationRepository->findAll(),
        ]);
    }
    

    #[Route('/user', name: 'app_reclamation_idUser', methods: ['GET'])]
    public function indexUser(ReclamationRepository $reclamationRepository,AuthenticationUtils $authenticationUtils): Response
    {
        return $this->render('reclamation/index.html.twig', [
            'reclamations' => $reclamationRepository->findByUserId($this->userConnected->getId()),
        ]);
    }
   
   

    #[Route('/new', name: 'app_reclamation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager,BadWordFilter $badWordFilter): Response
    {
        $reclamation = new Reclamation();
        $reclamation->setDateEnv(new \DateTime());
        $reclamation->setIdUser($this->userConnected);
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);
  
        if ($form->isSubmitted() && $form->isValid()) {
            $formData = $form->getData();
            $text = $formData->getContenu();

            // Check for profanity
            $isProfane = $badWordFilter->filterText($text);
            if (strpos($isProfane,"**") === false){ 
           
            $entityManager->persist($reclamation);
            $entityManager->flush();
            
            return $this->redirectToRoute('app_reclamation_idUser', ['idUser' => $reclamation->getIdUser()], Response::HTTP_SEE_OTHER);
        }
        
        return $this->redirectToRoute('app_reclamation_new', ['idUser' => $reclamation->getIdUser()], Response::HTTP_SEE_OTHER);

        
    }
    return $this->renderForm('reclamation/new.html.twig', [
        'reclamation' => $reclamation,
        'form' => $form,
    ]);
}

    #[Route('/{idReclamation}', name: 'app_reclamation_show', methods: ['GET'])]
    public function show(Reclamation $reclamation): Response
    {
        return $this->render('reclamation/show.html.twig', [
            'reclamation' => $reclamation,
        ]);
    }

    #[Route('/{idReclamation}/edit', name: 'app_reclamation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager,BadWordFilter $badWordFilter): Response
    {
        $reclamation->setDateEnv(new \DateTime());
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $formData = $form->getData();
            $text = $formData->getContenu();

            // Check for profanity
            $isProfane = $badWordFilter->filterText($text);
            if (strpos($isProfane,"**") === false){
            $entityManager->flush();

            return $this->redirectToRoute('app_reclamation_idUser',['idUser' => $reclamation->getIdUser()], Response::HTTP_SEE_OTHER);
        }
    }

        return $this->renderForm('reclamation/edit.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form,
        ]);
    }

    #[Route('/{idReclamation}/{status}', name: 'app_reclamation_edit_status', methods: ['GET', 'POST'])]
    public function editStatus(EntityManagerInterface $entityManager,string $status,int $idReclamation, ReclamationRepository $recRepo): Response 
   {
     // Fetch the Reclamation entity based on $idReclamation
     $reclamation = $recRepo->findOneBy(['idReclamation' => $idReclamation]);
     if (!$reclamation) {
         throw $this->createNotFoundException('Reclamation not found');
     }
    // Update the status attribute of the Reclamation entity
    $reclamation->setStatus($status);

    // Persist the changes to the database
    $entityManager->flush();

    return $this->redirectToRoute('app_reclamation_idUser', ['idUser' => $reclamation->getIdUser()], Response::HTTP_SEE_OTHER); 
}

    #[Route('/{idReclamation}', name: 'app_reclamation_delete', methods: ['POST'])]
    public function delete(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reclamation->getIdReclamation(), $request->request->get('_token'))) {
            $entityManager->remove($reclamation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_reclamation_idUser',['idUser' => $reclamation->getIdUser()], Response::HTTP_SEE_OTHER);
    }

    #[Route('/admin/status/{status}', name: 'fetch_reclamations_by_status', methods: ['GET'])]
    public function indexStatus(ReclamationRepository $reclamationRepository, string $status): Response
    {
             return $this->render('reclamation/indexAdmin.html.twig', [
                 'reclamations' => $reclamationRepository->findByStatus($status),
             ]);
         }

}
