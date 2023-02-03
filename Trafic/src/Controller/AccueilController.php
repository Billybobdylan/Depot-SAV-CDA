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
        $contmod = count($module);
        return $this->render('accueil/index.html.twig', [
            'module' => $module,
            'contmod' => $contmod,
            'controller_name' => 'AccueilController',
        ]);
    }


    #[Route('/test', name: 'app_test')]
    public function test(ModuleRepository $repo): Response
    {
        $mod = $repo->findAllModules();

        dd($mod);
        return $this->render('accueil/index.html.twig', [
            'module' => $module,
            'controller_name' => 'AccueilController',
        ]);
    }
}
