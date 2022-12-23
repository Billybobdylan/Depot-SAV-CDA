<?php

namespace App\Controller;


use App\Entity\Categorie;
use App\Repository\CategorieRepository;
use App\Entity\Souscat;
use App\Repository\SouscatRepository;
use App\Entity\Produit;
use App\Repository\ProduitRepository;
use App\Entity\Detail;
use App\Repository\DetailRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    #[Route('/', name: 'app_')]
    public function index(CategorieRepository $repo): Response
    {
        $categories = $repo->findAll();
        return $this->render('/index.html.twig', [
        'categories' => $categories
    ]);       
    }

    
    #[Route('/categorie', name:'categorie')] 
    public function categorie(CategorieRepository $repo) :Response
    {
        $categories = $repo->findAll();

        return $this->render('/categorie.html.twig', [
            'categories' => $categories
        ]);
    }
    
    #[Route('/categorie/{id}', name: 'app_categorie')]
    public function souscat($id, CategorieRepository $repo): Response
    {
        $cat = $repo->find($id);

        // dd($souscat);
        return $this->render('/souscat.html.twig', [
            
            'cat' => $cat
        ]);
    }

    #[Route('/categorie/{id}/{produit}', name: 'app_produit')]
    public function produit($produit, SouscatRepository $repo): Response
    {
        $produit = $repo->find($produit);

        // dd($produit);
        return $this->render('/produit.html.twig', [
            
            'produit' => $produit
        ]);
    }

    #[Route('/categorie/{id}/{produit}/{detail}', name: 'app_detail')]
    public function detail($detail, ProduitRepository $repo): Response
    {
        $detail = $repo->find($detail);

         //dd($detail);
        return $this->render('/detail.html.twig', [
           
            'detail' => $detail
        ]);
    }
}

