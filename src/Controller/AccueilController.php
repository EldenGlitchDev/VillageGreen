<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\CategorieRepository;
use App\Repository\ArticleRepository;

final class AccueilController extends AbstractController
{

    private $categorieRepository;
    private $articleRepository;

    public function __construct(CategorieRepository $categorieRepository, ArticleRepository $articleRepository)
    {
        $this->categorieRepository=$categorieRepository;
        $this->articleRepository=$articleRepository;
    }


    #[Route('/', name: 'app_index')]
    public function index(): Response
    {
        $categories = $this->categorieRepository->findAll();
        $articles = $this->articleRepository->findBy([], ['salesCount' => 'DESC'], 10);

        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'AccueilController',
            'categories' => $categories,
            'articles' => $articles,
        ]);
    }

    #[Route('/categories/{idSousCat}', name: 'app_sous_categorie')]
    public function categorie(int $idSousCat): Response
    {
        $souscategories = $this->categorieRepository->find($idSousCat);

        return $this->render('accueil/sousCat.html.twig', [
            'controller_name' => 'AccueilController',
            'souscategories' => $souscategories,
            ]);
    }
}