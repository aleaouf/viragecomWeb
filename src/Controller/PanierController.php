<?php

namespace App\Controller;

use App\Entity\Panier;
use App\Entity\Articles;
use App\Form\PanierType;
use App\Repository\PanierRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ArticlesRepository;
use Symfony\Component\Security\Core\Security;

#[Route('/panier')]
class PanierController extends AbstractController
{
    private $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    #[Route('/commander', name: 'app_commander')]
    public function commander(PanierRepository $panierRepository, ArticlesRepository $articlesRepository, \Twig\Environment $twig): Response
    {
        // Add your Twilio message sending logic here...
        // Assuming $accountSid and $authToken are defined elsewhere

        // Retrieve logged-in user (assuming you need this here)
        $client = new Client($accountSid, $authToken);

    $message = $client->messages->create(
    '+21654821391', // replace with admin's phone number
    [
        'from' => '+14845280278', // replace with your Twilio phone number
        'body' => 'votre commande a été traité ' ,
    ]
                );
        $user = $this->security->getUser();
        if (!$user) {
            throw $this->createAccessDeniedException('Vous devez être connecté pour commander.');
        }

        // Retrieve paniers and associated articles
        $paniers = $panierRepository->findAll();
        $articles = [];

        // Calculate total price and discount
        $totalPrice = 0;
        $discount = 0;

        // Create TCPDF instance
        $pdf = new \TCPDF();

        // Add content to PDF
        $pdf->SetTitle('Ticket de commande');
        $pdf->AddPage();
        $pdf->SetFont('helvetica', '', 12);

        // Loop through paniers and retrieve associated articles
        foreach ($paniers as $panier) {
            $article = $articlesRepository->find($panier->getIdArticle());
            $articles[$panier->getIdPanier()] = $article;

            // Calculate total price based on article prices and quantities
            if ($article) {
                $totalPrice += $article->getPrix() * $panier->getNbrArticle();
            }
        }

        // Apply discount if total number of paniers is more than 4
        if (count($paniers) > 4) {
            $discount = $totalPrice * 0.1;
            $totalPrice -= $discount;
        }

        // Render Twig template into HTML
        $html = $twig->render('panier/pdf.html.twig', [
            'paniers' => $paniers,
            'articles' => $articles,
            'totalPrice' => $totalPrice,
            'discount' => $discount,
        ]);

        // Add HTML content to PDF
        $pdf->writeHTML($html);

        // Output PDF content
        $pdfContent = $pdf->Output('ticket_commande.pdf', 'S');

        // Send the PDF via email or save to filesystem
        // ...

        return new Response($pdfContent, Response::HTTP_OK, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="ticket_commande.pdf"',
        ]);
    }

    #[Route('/', name: 'app_panier_index', methods: ['GET'])]
    public function index(PanierRepository $panierRepository, ArticlesRepository $articlesRepository): Response
    {
        // Retrieve the currently logged-in user
        $user = $this->security->getUser();

        if (!$user) {
            throw $this->createAccessDeniedException('Vous devez être connecté pour accéder à vos paniers.');
        }

        // Retrieve paniers associated with the current user
        $paniers = $panierRepository->findBy(['idUser' => $user]);

        // Initialize array to hold associated articles
        $articles = [];

        // Initialize total price and discount
        $totalPrice = 0;
        $discount = 0;

        // Loop through paniers and retrieve associated articles
        foreach ($paniers as $panier) {
            $article = $articlesRepository->find($panier->getIdArticle());
            $articles[$panier->getIdPanier()] = $article;

            // Calculate total price based on article prices and quantities
            if ($article) {
                $totalPrice += $article->getPrix() * $panier->getNbrArticle();
            }
        }

        // Apply discount if total number of paniers is more than 3
        if (count($paniers) > 3) {
            $discount = $totalPrice * 0.1;
            $totalPrice -= $discount;
        }

        return $this->render('panier/index.html.twig', [
            'paniers' => $paniers,
            'articles' => $articles,
            'totalPrice' => $totalPrice,
            'discount' => $discount,
        ]);
    }

    #[Route('/new/{id}', name: 'app_panier_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, int $id): Response
    {
        // Retrieve logged-in user
        $user = $this->security->getUser();
        if (!$user) {
            throw $this->createAccessDeniedException('Vous devez être connecté pour ajouter un article au panier.');
        }

        // Create new Panier instance
        $panier = new Panier();

        // Retrieve article by ID
        $article = $entityManager->getRepository(Articles::class)->find($id);
        if (!$article) {
            throw $this->createNotFoundException('Article non trouvé.');
        }

        // Assign article ID and user ID to the panier
        $panier->setIdArticle($article->getId());
        $panier->setIdUser($user->getId());

        // Create and handle form submission
        $form = $this->createForm(PanierType::class, $panier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($panier);
            $entityManager->flush();

            return $this->redirectToRoute('app_panier_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('panier/new.html.twig', [
            'panier' => $panier,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{idPanier}', name: 'app_panier_show', methods: ['GET'])]
    public function show(Panier $panier): Response
    {
        return $this->render('panier/show.html.twig', [
            'panier' => $panier,
        ]);
    }

    #[Route('/{idPanier}/edit', name: 'app_panier_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Panier $panier, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PanierType::class, $panier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_panier_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('panier/edit.html.twig', [
            'panier' => $panier,
            'form' => $form,
        ]);
    }

    #[Route('/{idPanier}', name: 'app_panier_delete', methods: ['POST'])]
    public function delete(Request $request, Panier $panier, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$panier->getIdPanier(), $request->request->get('_token'))) {
            $entityManager->remove($panier);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_panier_index', [], Response::HTTP_SEE_OTHER);
    }
}
