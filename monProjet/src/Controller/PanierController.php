<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Repository\ProduitRepository;
use App\Entity\Secompose;
use App\Repository\SecomposeRepository;
use App\Entity\Command;
use App\Repository\CommandRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class PanierController extends AbstractController
{
    #[Route('/add/{id}', name: 'app_add')]
    public function add(SessionInterface $session,  Produit $id): Response
    {
       $panier = $session->get("panier", []);

        $panier[] = $id;
        

        $session->set("panier", $panier);

        return $this->redirect("/panier");
    }

    #[Route('/remove/{id}', name: 'app_remove')]
    public function remove(SessionInterface $session,  Produit $id): Response
    {
        $panier = $session->get("panier", []);

        $panier[] = $id;

     
        $session->set("panier", $panier);


        return $this->redirect("/panier");
    }


    #[Route('/panier', name: 'app_panier')]
    public function index(SessionInterface $session, ProduitRepository $produitRepository, CommandRepository $command): Response
    {
        $panier = $session->get("panier", []);

        return $this->render('panier/index.html.twig', [
            'panier' => $panier,
        ]);
        }

    

    #[Route('/clear', name: 'app_clear')]
    public function clear(SessionInterface $session): Response
    {
        $panier = $session->set("panier", []);

        return $this->redirect("/panier");
    }

     #[Route('/valid', name: 'app_valid')]
    public function valid(ProduitRepository $repo, SessionInterface $session, EntityManagerInterface $manager): Response
    {
        $panier = $session->get("panier", []);

        foreach ($panier as $repo) {
            $p = $repo->getId();

            $sc = new Secompose();
            //$sc->setCommande($com);
            $sc->addProduit($p);
            $sc->addQuantite(3);
            $manager->persist($sc);
            $manager->flush();
        }


        $session->set("panier", []);

        return $this->redirect("/panier");
    }
}

