<?php

namespace App\Controller;

use App\Repository\ModuleRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class NavController extends AbstractController
{
    #[Route('/nav', name: 'app_nav')]
    public function index(ModuleRepository $repo, SessionInterface $session): Response
    {
        return $this->render('nav/index.html.twig', [
            'module' => $repo->findAll()
        ]);
    }
}
