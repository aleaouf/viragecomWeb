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
use Twilio\Rest\Client;
use TCPDF;

#[Route('/panier')]
class PanierController extends AbstractController
{
    #[Route('/commander', name: 'app_commander')]
public function commander(PanierRepository $panierRepository, ArticlesRepository $articlesRepository, \Twig\Environment $twig): Response
{

    
$client = new Client($accountSid, $authToken);

$message = $client->messages->create(
    '+21654821391', // replace with admin's phone number
    [
        'from' => '+14845280278', // replace with your Twilio phone number
        'body' => 'votre commande a été traité ' ,
    ]
);
    // Récupérer les données des paniers et des articles
    $paniers = $panierRepository->findAll();
    $articles = [];

    // Initialiser la somme totale du panier
    $totalPrice = 0;

    // Initialiser la remise à 0
    $discount = 0;

    // Créer une instance de TCPDF
    $pdf = new TCPDF();

    // Ajouter le contenu au PDF
    $pdf->SetTitle('Ticket de commande');
    $pdf->AddPage();
    $pdf->SetFont('helvetica', '', 12);

    // Parcourir chaque panier et récupérer l'article associé
    foreach ($paniers as $panier) {
        $article = $articlesRepository->find($panier->getIdArticle());
        $articles[$panier->getIdPanier()] = $article;

        // Ajouter le prix de l'article multiplié par le nombre d'articles au total
        if ($article) {
            $totalPrice += $article->getPrix() * $panier->getNbrArticle();
        }
    }

    // Appliquer une remise de 10% si le nombre total d'articles est supérieur à 4
    if (count($paniers) > 4) {
        $discount = $totalPrice * 0.1;
        $totalPrice -= $discount;
    }

    // Rendre le modèle Twig dans une chaîne HTML en passant les variables requises
    $html = $twig->render('panier/pdf.html.twig', [
        'paniers' => $paniers,
        'articles' => $articles, // Passer la variable articles au modèle Twig
        'totalPrice' => $totalPrice,
        'discount' => $discount,
    ]);

    // Ajouter le contenu HTML au PDF
    $pdf->writeHTML($html);

    // Enregistrer le PDF dans un fichier ou le renvoyer en réponse HTTP
    $pdfContent = $pdf->Output('ticket_commande.pdf', 'S');

    // Envoyer le PDF par e-mail ou enregistrer dans le système de fichiers
    // ...

    return new Response($pdfContent, Response::HTTP_OK, [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'attachment; filename="ticket_commande.pdf"',
    ]);
}

    


    #[Route('/', name: 'app_panier_index', methods: ['GET'])]
    public function index(PanierRepository $panierRepository, ArticlesRepository $articlesRepository): Response
    {
        $paniers = $panierRepository->findAll();
    
        // Initialiser un tableau pour contenir les articles associés
        $articles = [];
    
        // Initialiser la somme totale du panier
        $totalPrice = 0;
    
        // Initialiser la remise à 0
        $discount = 0;
    
        // Parcourir chaque panier et récupérer l'article associé
        foreach ($paniers as $panier) {
            $article = $articlesRepository->find($panier->getIdArticle());
            $articles[$panier->getIdPanier()] = $article;
    
            // Ajouter le prix de l'article multiplié par le nombre d'articles au total
            if ($article) {
                $totalPrice += $article->getPrix() * $panier->getNbrArticle();
            }
        }
    
        // Appliquer une remise de 10% si le nombre total d'articles est supérieur à 3
        if (count($paniers) > 3) {
            $discount = $totalPrice * 0.1;
            $totalPrice -= $discount;
        }
    
        return $this->render('panier/index.html.twig', [
            'paniers' => $paniers,
            'articles' => $articles,
            'totalPrice' => $totalPrice, // Passer la somme totale à la vue Twig
            'discount' => $discount, // Passer le montant de la remise à la vue Twig
        ]);
    }
    


   

    #[Route('/new/{id}', name: 'app_panier_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, int $id): Response
    {
        $panier = new Panier();
        
        // Assurez-vous que l'article existe
        $article = $entityManager->getRepository(Articles::class)->find($id);
        if (!$article) {
            throw $this->createNotFoundException('Article non trouvé.');
        }
    
        // Associez l'ID de l'article au panier
        $panier->setIdArticle($article->getId());
        $panier->setIdUser(7);
    
        // Créez le formulaire et traitez la demande
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
