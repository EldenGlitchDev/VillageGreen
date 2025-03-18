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

    

    #[Route('/sous-categorie-{categorie_id}', name: 'app_sous_categorie', requirements: ['id' => '\d+'])]
    public function SelectSousCategorie(int $categorie_id): Response
    {
            $categories = $this->categorieRepository->find($categorie_id);
           


            $souscategorie = $categories->getSousCategorie();

            return $this->render('accueil/sousCat.html.twig',[
                'souscategories' => $souscategorie,

            ]);
    }

    #[Route('/fraisdeport_delaislivraison', name: 'app_fraisdeport_delaislivraison')]
    public function fraisdeport_delaislivraison(): Response{
        return $this->render('fdpdelais_livraison/fdpdelais_livraison.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }

}