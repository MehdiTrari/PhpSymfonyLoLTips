<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    #[Route('/connexion', name: 'security.login', methods: ['GET', 'POST'])]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // Si l'utilisateur est déjà connecté, on le redirige vers la page d'accueil
        if ($this->getUser()) {
            return $this->redirectToRoute('home');
        }

        return $this->render('Pages/security/login.html.twig', [
            'last_username' => $authenticationUtils->getLastUsername(),
            'error' => $authenticationUtils->getLastAuthenticationError(),
        ]);
    }

    #[Route('/deconnexion', name: 'security.logout')]
    public function logout(): void
    {
        //rien à écrire ici car c'est Symfony qui gère la déconnexion
    }

    //#[Route('/inscription', name: 'security.register', methods: ['GET', 'POST'])]
    //public function register(): Response
    //{
    //    return $this->render('Pages/security/register.html.twig', [
     //       'controller_name' => 'SecurityController',
       // ]);
    //}
}
