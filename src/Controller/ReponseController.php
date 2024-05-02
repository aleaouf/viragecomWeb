<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Entity\Reponse;
use App\Form\ReponseType;
use App\Repository\ReclamationRepository;
use App\Repository\ReponseRepository;
use App\Repository\UtilisateurRepository;
use App\Service\BadWordFilter;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/reponse')]
class ReponseController extends AbstractController
{
    private BadWordFilter $badWordFilter;

    public function __construct(BadWordFilter $badWordFilter)
    {
        $this->badWordFilter = $badWordFilter;
    }

    #[Route('/', name: 'app_reponse_index', methods: ['GET'])]
    public function index(ReponseRepository $reponseRepository): Response
    {
        return $this->render('reponse/index.html.twig', [
            'reponses' => $reponseRepository->findAll(),
        ]);
    }

   

    #[Route('/back/{idReclamation}', name: 'app_reponse_admin', methods: ['GET'])]
    public function indexAdmin(ReponseRepository $reponseRepository,int $idReclamation): Response
    {
        return $this->render('reponse/indexAdmin.html.twig', [
            'reponses' => $reponseRepository->findBy(['idReclamation' => $idReclamation]),
        ]);
    }

    #[Route('/front/{idReclamation}', name: 'app_reponse_idReclamation', methods: ['GET'])]
    public function indexUser(ReponseRepository $reponseRepository,int $idReclamation): Response
    {
        return $this->render('reponse/index.html.twig', [
            'reponses' => $reponseRepository->findBy(['idReclamation' => $idReclamation]),
        ]);
    }

    #[Route('/new/{idReclamation}', name: 'app_reponse_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager,UtilisateurRepository $utilisateurRepository,ReclamationRepository $reclamationRepository,int $idReclamation,ReclamationController $recCont,BadWordFilter $badWordFilter, ReclamationRepository $recRepo,MailerInterface $mailer): Response
    {
        
        $reclamation = $reclamationRepository->findOneBy(['idReclamation' => $idReclamation]);

        $userMail = $utilisateurRepository->findOneBy(['id' => $reclamation->getIdUser()])->getEmail();
    
    
        $reponse = new Reponse();
        $reponse->setDateRep(new \DateTime());
        $reponse->setIdReclamation($reclamationRepository->findOneBy(['idReclamation' => $idReclamation]) );
        $form = $this->createForm(ReponseType::class, $reponse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $formData = $form->getData();
            $text = $formData->getContenu();

            // Check for profanity
            $isProfane = $badWordFilter->filterText($text);
            if (strpos($isProfane,"**") === false){
            $entityManager->persist($reponse);
            $entityManager->flush();
            $recCont->editStatus($entityManager,"traitement",$idReclamation, $recRepo);

            
            //Email
            $email = (new Email())
            ->from('med.aziz.gharbi01@gmail.com')
            ->to($userMail)
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            //->priority(Email::PRIORITY_HIGH)
            ->subject('Service Client')
            ->text('Sending emails is fun again!')
            ->html('<p>Une reponse a votre réclamation a été envoyé</p>');

        $mailer->send($email);

         
        return $this->redirectToRoute('app_reclamation_index', [], Response::HTTP_SEE_OTHER);
            }

            return $this->redirectToRoute('app_reponse_new', ['idReclamation' => $idReclamation], Response::HTTP_SEE_OTHER);

    }
        
    
        return $this->renderForm('reponse/new.html.twig', [
            'reponse' => $reponse,
            'form' => $form,
        ]);
    }

    #[Route('/show/{idReponse}', name: 'app_reponse_show', methods: ['GET'])]
    public function show(Reponse $reponse): Response
    {
        return $this->render('reponse/show.html.twig', [
            'reponse' => $reponse,
        ]);
    }

    #[Route('/{idReponse}/edit', name: 'app_reponse_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reponse $reponse, EntityManagerInterface $entityManager,BadWordFilter $badWordFilter): Response
    {
        $reponse->setDateRep(new \DateTime());

        $form = $this->createForm(ReponseType::class, $reponse);
        $form->handleRequest($request);
        $formData = $form->getData();
        $text = $formData->getContenu();

            // Check for profanity
            $isProfane = $badWordFilter->filterText($text);
            if (strpos($isProfane,"**") === false){

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_reponse_admin', ['idReclamation' => $reponse->getIdReclamation()->getIdReclamation()], Response::HTTP_SEE_OTHER);
        }
    }

        return $this->renderForm('reponse/edit.html.twig', [
            'reponse' => $reponse,
            'form' => $form,
        ]);
    }

    #[Route('/delete/{idReponse}', name: 'app_reponse_delete', methods: ['GET', 'POST'])]
    public function delete(Request $request, int $idReponse, EntityManagerInterface $entityManager, ReponseRepository $Reponserepo): Response
    {

        $reponse= $Reponserepo->findOneBy(['idReponse' => $idReponse]);
        
            $entityManager->remove($reponse);
            $entityManager->flush();
        
        return new Response(null, Response::HTTP_NO_CONTENT);
           
    }
}
