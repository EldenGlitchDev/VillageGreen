<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\CategorieRepository;
use App\Repository\ArticleRepository;
use App\Repository\SousCategorieRepository;

final class AccueilController extends AbstractController
{

    private $categorieRepository;
    private $articleRepository;
    private $sousCategorieRepository;

    public function __construct(CategorieRepository $categorieRepository, ArticleRepository $articleRepository, SousCategorieRepository $sousCategorieRepository)
    {
        $this->categorieRepository=$categorieRepository;
        $this->articleRepository=$articleRepository;
        $this->sousCategorieRepository=$sousCategorieRepository;
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

    /*#[Route('/categories/{id}', name: 'app_sous_categorie', requirements: ['id' => '\d+'])]
    public function categorie(int $id): Response
    {
        $categories = $this->categorieRepository->findAll($id);
        $souscategories = $this->sousCategorieRepository->findBy(['categorie' => $categories]);

        return $this->render('accueil/sousCat.html.twig', [
            'controller_name' => 'AccueilController',
            'souscategories' => $souscategories,
            ]);
    }*/

    #[Route('/categories/{id}', name: 'app_sous_categorie')]
    public function categorie(int $id): Response
    {
        $souscategories = $this->categorieRepository->find($id);

        return $this->render('accueil/sousCat.html.twig', [
            'controller_name' => 'AccueilController',
            'souscategories' => $souscategories,
            ]);
    }

    /*#[Route('/categories/{id}', name: 'app_sous_categorie', requirements: ['id' => '\d+'])]
public function categorie(int $id): Response
{
    // Récupère une seule catégorie à partir de son ID
    $categorie = $this->categorieRepository->find($id);

    // Si la catégorie n'existe pas, tu peux retourner une page d'erreur ou autre logique de gestion
    if (!$categorie) {
        throw $this->createNotFoundException('La catégorie n\'existe pas.');
    }

    // Récupère la sous-catégorie associée à cette catégorie (via la relation ManyToOne)
    $sousCategorie = $categorie->getSousCategorie();

    // Vérifie si une sous-catégorie existe
    if (!$sousCategorie) {
        throw $this->createNotFoundException('Aucune sous-catégorie associée à cette catégorie.');
    }

    if (!$sousCategorie) {
        dump('Pas de sous-catégorie trouvée pour cette catégorie');
    }
    

    return $this->render('accueil/sousCat.html.twig', [
        'controller_name' => 'AccueilController',
        'souscategorie' => $sousCategorie,
    ]);
}*/

    
}