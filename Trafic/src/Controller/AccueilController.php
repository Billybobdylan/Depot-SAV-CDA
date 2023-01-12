<?php

namespace App\Controller;

use App\Repository\ModuleRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AccueilController extends AbstractController
{
    #[Route('/', name: 'app_accueil')]
    public function index(ModuleRepository $repo): Response
    {
        $module = $repo->findAll();
        return $this->render('accueil/index.html.twig', [
            'module' => $module,
            'controller_name' => 'AccueilController',
        ]);
    }
}
