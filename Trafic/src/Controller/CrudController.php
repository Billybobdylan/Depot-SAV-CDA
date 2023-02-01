<?php

namespace App\Controller;

use App\Entity\Mesure;
use App\Entity\Module;
use App\Form\ModuleType;
use App\Form\Module1Type;
use App\Repository\MesureRepository;
use App\Repository\ModuleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/crud')]
class CrudController extends AbstractController
{
    // Affiche l'index
    #[Route('/', name: 'app_crud_index', methods: ['GET'])]
    public function index(ModuleRepository $moduleRepository, MesureRepository $mesureRepository, EntityManagerInterface $em): Response
    {
        
        $modules = $moduleRepository->findAll();
        $mesures = $mesureRepository->findAll();
         foreach($mesures as $mesure){
             $random = rand(0, 1);
             $mesure->setEtat($random);
             $em->flush();
         }

        return $this->render('crud/index.html.twig', [
            'modules' => $moduleRepository->findAll(),
            'mesures' => $mesureRepository->findAll(),
        ]);
    }


    // Création de nouveau module
    #[Route('/new', name: 'app_crud_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ModuleRepository $moduleRepository): Response
    {
        $module = new Module();
        $form = $this->createForm(Module1Type::class, $module);
        $form->handleRequest($request);
   
        

        if ($form->isSubmitted() && $form->isValid()) {

            $module->setEtat(true);
            $moduleRepository->save($module, true);
            

            return $this->redirectToRoute('app_crud_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('crud/new.html.twig', [
            'module' => $module,
            'form' => $form,
        ]);
    }


    // Affiche les module par id
    #[Route('/{id}', name: 'app_crud_show', methods: ['GET'])]
    public function show(int $id, Module $module, Mesure $mesure, MesureRepository $mesRepo, Module $modRepo): Response
    {
        

        $mes = $mesRepo->findBy(['module'=> $id]);

        $mesValeur = [];
        $mesDate = [];

        foreach($mes as $mesure){
            $mesValeur[] = $mesure->getValeur();
            $mesDate[] = $mesure->getDate()->format('H:i:s');
            
        }
         
        return $this->render('crud/show.html.twig', [
            'mesValeur' => json_encode($mesValeur),
            'mesDate' => json_encode($mesDate),
            'module' => $module,
            'mesure' => $mesure,
        ]);
    }


    // Permet la modification d'un module selon l'id
    #[Route('/{id}/edit', name: 'app_crud_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Module $module, ModuleRepository $moduleRepository): Response
    {
        $form = $this->createForm(Module1Type::class, $module);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $moduleRepository->save($module, true);

            return $this->redirectToRoute('app_crud_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('crud/edit.html.twig', [
            'module' => $module,
            'form' => $form,
        ]);
    }


    // Permet de supprimé un module
    #[Route('/{id}', name: 'app_crud_delete', methods: ['POST'])]
    public function delete(Request $request, Module $module, ModuleRepository $moduleRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$module->getId(), $request->request->get('_token'))) {
            $moduleRepository->remove($module, true);
        }

        return $this->redirectToRoute('app_crud_index', [], Response::HTTP_SEE_OTHER);
    }




  

    /**
     * @Route("/module/{id}/add-value/{value}", name="module_add_value", methods={"POST"})
     */
    public function addValue(Module $module, int $value): Response
    {
        $message = new Module($module, $value);
        $this->messageBus->dispatch($message);

        return new Response('e', Response::HTTP_ACCEPTED);
    }
}








