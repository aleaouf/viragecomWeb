<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Entity\Articles;
use App\Form\ArticlesType;
use App\Repository\ArticlesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
use App\Entity\Reactions;
use App\Repository\ReactionsRepository;



#[Route('/articles')]
class ArticlesController extends AbstractController
{



    #[Route('/articles/sort-by-name', name: 'app_articles_sort_by_name')]
    public function sortByname(ArticlesRepository $articlesRepository): Response
    {
        // Récupérer les articles triés par nom
        $articles = $articlesRepository->findBy([], ['nom' => 'ASC']);

        // Rendre la vue avec les articles triés
        return $this->render('articles/sorted_by_name.html.twig', [
            'articles' => $articles
        ]);
    }

    
    #[Route('/react-to-article', name: 'app_react_to_article')]
    public function reactToArticle(Request $request, EntityManagerInterface $entityManager, ReactionsRepository $reactionsRepository): Response
    {
        // Récupérer les données du formulaire AJAX
        $articleId = $request->request->get('article_id');
        $reactionType = $request->request->get('reaction_type');
        $userId = 7; // Remplacez 7 par l'ID de l'utilisateur connecté
    
        // Vérifier si l'utilisateur a déjà réagi à cet article
        $existingReaction = $reactionsRepository->findOneBy(['idArticle' => $articleId, 'idUser' => $userId]);
    
        if ($existingReaction) {
            // Si l'utilisateur a déjà réagi, mettre à jour sa réaction
            $existingReaction->setTypeReact($reactionType);
        } else {
            // Sinon, enregistrer la nouvelle réaction dans la base de données
            $reaction = new Reactions();
            $reaction->setIdArticle($articleId);
            $reaction->setIdUser($userId);
            $reaction->setTypeReact($reactionType);
    
            $entityManager->persist($reaction);
        }
    
        $entityManager->flush();
    
        // Vous pouvez renvoyer une réponse JSON avec un message de succès si nécessaire
        return new JsonResponse(['message' => 'Réaction enregistrée avec succès.']);
    }

    #[Route('/search', name: 'app_search_articles', methods: ['GET'])]
    public function searchArticle(Request $request, ArticlesRepository $articlesRepository): Response
    {
        $articleName = $request->query->get('q');
        $article = $articlesRepository->findOneBy(['nom' => $articleName]);
        
        if (!$article) {
            // Si aucun article n'est trouvé, rediriger vers une page indiquant qu'aucun article n'a été trouvé
            return $this->render('articles/no_result.html.twig');
        }
    
        // Si un article est trouvé, rediriger vers la page de détails de l'article
        return $this->redirectToRoute('app_articles_show2', ['id' => $article->getId()]);
    }
    
    #[Route('/front/{id}', name: 'app_articles_show2', methods: ['GET'])]
    public function show2(Articles $article): Response
    {
        return $this->render('articles/show2.html.twig', [
            'article' => $article,
        ]);
    }
    #[Route('/', name: 'app_articles_index', methods: ['GET'])]
    public function index(ArticlesRepository $articlesRepository): Response
    {
        return $this->render('articles/index.html.twig', [
            'articles' => $articlesRepository->findAll(),
        ]);
    }
    #[Route('/front', name: 'app_articles_index2', methods: ['GET'])]
    public function index2(Request $request, ArticlesRepository $articlesRepository, PaginatorInterface $paginator, ReactionsRepository $reactionsRepository): Response
    {
        // Récupérer les articles depuis la base de données
        $articlesQuery = $articlesRepository->createQueryBuilder('a')
            ->getQuery();
    
        // Paginer les articles
        $articles = $paginator->paginate(
            $articlesQuery, // Requête pour récupérer les articles
            $request->query->getInt('page', 1), // Numéro de page par défaut
            3 // Nombre d'articles par page
        );
    
        // Récupérez le nombre de likes et dislikes pour chaque article
        $reactionsCounts = [];
        foreach ($articles as $article) {
            $likeCount = $reactionsRepository->countByArticleAndType($article->getId(), 'like');
            $dislikeCount = $reactionsRepository->countByArticleAndType($article->getId(), 'dislike');
            $reactionsCounts[$article->getId()] = ['likeCount' => $likeCount, 'dislikeCount' => $dislikeCount];
        }
    
        return $this->render('articles/marketplace.html.twig', [
            'articles' => $articles,
            'reactionsCounts' => $reactionsCounts,
        ]);
    }

    #[Route('/new', name: 'app_articles_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $article = new Articles();
        $form = $this->createForm(ArticlesType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $file = $form['image']->getData();
            if ($file) {
                $fileName = md5(uniqid()) . '.' . $file->guessExtension();
                $file->move($this->getParameter('my_images_directory'), $fileName);
                $article->setImage($fileName);
            }

            $entityManager->persist($article);
            $entityManager->flush();

            return $this->redirectToRoute('app_articles_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('articles/new.html.twig', [
            'article' => $article,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_articles_show', methods: ['GET'])]
    public function show(Articles $article): Response
    {
        return $this->render('articles/show.html.twig', [
            'article' => $article,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_articles_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Articles $article, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ArticlesType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form['image']->getData();
            if ($file) {
                $fileName = md5(uniqid()) . '.' . $file->guessExtension();
                $file->move($this->getParameter('my_images_directory'), $fileName);
                $article->setImage($fileName);
            }
            $entityManager->flush();

            return $this->redirectToRoute('app_articles_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('articles/edit.html.twig', [
            'article' => $article,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_articles_delete', methods: ['POST'])]
    public function delete(Request $request, Articles $article, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$article->getId(), $request->request->get('_token'))) {
            $entityManager->remove($article);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_articles_index', [], Response::HTTP_SEE_OTHER);
    }
 
}
