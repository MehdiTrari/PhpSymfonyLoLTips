<?php

namespace App\Controller;

use App\Repository\ChampionsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChampionsController extends AbstractController
{
    #[Route('/champions', name: 'app_champions')]
    public function index(ChampionsRepository $repository): Response
    {

        $champions = $repository->findAll();

        return $this->render('pages/champions/index.html.twig', [
            'champions' => $champions
        ]);
    }
}
