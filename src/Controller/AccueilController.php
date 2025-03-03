<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\CategorieRepository;

final class AccueilController extends AbstractController
{

    /*private $categorieRepository;

    public function __construct(CategorieRepository $categorieRepository)
    {
        $this->categorieRepository=$categorieRepository;
    }*/


    #[Route('/', name: 'app_accueil')]
    public function index(): Response
    {
        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }
    
    /*#[Route('/categorie', name: 'app_categorie')]
    public function categorie(CategorieRepository $categorieRepository): Response
    {
        $categorie = $categorieRepository->findAll();
        return $this->render('accueil/index.html.twig', [
            'categorie' => $categorie,
        ]);
    }*/

    /*#[Route('/categorie', name: 'app_categorie')]
    public function categorie()
{
    $categories = $this->getDoctrine()->getRepository(CategorieRepository::class)->findAll();

    return $this->render('votre_template.html.twig', [
        'categories' => $categories
    ]);
}*/

    
}