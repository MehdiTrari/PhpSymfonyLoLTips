<?php

namespace App\Controller;

use App\Form\ChampionsTipsType;
use App\Entity\Champions;
use App\Repository\ChampionsRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;




class ChampionsController extends AbstractController
{


    #[Route('/champions', name: 'app_champions', methods: ['GET'])]
    public function index(ChampionsRepository $repository, PaginatorInterface $paginator, Request $request): Response
    {

        $champions = $paginator->paginate(
            $repository->findAll(),
            $request->query->getInt('page', 1),
            5
        );

        return $this->render('pages/champions/index.html.twig', [
            'champions' => $champions,

        ]);
    }

    #[Route('/champions/nouveau', name: 'champions_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $manager): Response
    {
        $champions = new Champions();
        $form = $this->createForm(ChampionsTipsType::class, $champions);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $champions = $form->getData();

            $manager->persist($champions);
            $manager->flush();

            $this->addFlash('success', 'Le champion a bien été ajouté');

            return $this->redirectToRoute('app_champions');
        }


        return $this->render('pages/champions/new.html.twig', [
            'champions' => $champions,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/champions/edition/{id}', name: 'champions_edit', methods: ['GET', 'POST'])]
    public function edit(Champions $champions, Request $request, EntityManagerInterface $manager): Response
    {
        $form = $this->createForm(ChampionsTipsType::class, $champions);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $champions = $form->getData();

            $manager->persist($champions);
            $manager->flush();

            $this->addFlash('success', 'Le champion a bien été modifié');

            return $this->redirectToRoute('app_champions');
        }

        return $this->render('pages/champions/edit.html.twig', [
            'champions' => $champions,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/champions/suppression/{id}', name: 'champions_delete', methods: ['GET'])]
    public function delete(Champions $champions, EntityManagerInterface $manager): Response
    {
        
            $manager->remove($champions);
            $manager->flush();

            $this->addFlash('success', 'Le champion a bien été supprimé');
        

        return $this->redirectToRoute('app_champions');
    }
}
