<?php

namespace App\Controller;

use App\Repository\ModuleRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ModuleController extends AbstractController
{
    #[Route('/module/{id}', name: 'app_module')]
    public function index(ModuleRepository $repo): Response
    {
        $module = $repo->findAll();
        return $this->render('module/index.html.twig', [
            'module' => $module,
            'controller_name' => 'ModuleController',
        ]);
    }
}
