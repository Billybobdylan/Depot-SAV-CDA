<?php

namespace App\Controller;

use App\Entity\Module;

use App\Repository\ModuleRepository;
use Symfony\Bridge\Doctrine\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ModuleController extends AbstractController
{
    #[Route('/module/{id}', name: 'app_module')]
    public function index(int $id, ModuleRepository $repo, ManagerRegistry $doctrine): Response
    {
        $repository = $repo->getRepository(Module::class);
        $module = $repository->find($id);

        return $this->render('module/index.html.twig', [
            'module' => $module,
            
          
        ]);
    }

  
}
