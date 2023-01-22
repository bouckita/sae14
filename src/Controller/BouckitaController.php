<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BouckitaController extends AbstractController
{
    #[Route('/bouckita/base', name: 'app_bouckita_base')]
    public function base(): Response
    {
        return $this->render('bouckita/base.html.twig', [
            'controller_name' => 'BouckitaController',
        ]);
    }
    #[Route('/bouckita/cv', name: 'app_bouckita_cv')]
    Public function cv(): Response 
    {
        return $this->render('bouckita/cv.html.twig',[
            'controller_name' => 'BouckitaController',
        ]);
    }
    #[Route('/bouckita/portfolio', name: 'app_bouckita_portfolio')]
    Public function portfolio(): Response 
    {
        return $this->render('bouckita/portfolio.html.twig',[
            'controller_name' => 'BouckitaController',
        ]);
    }
    #[Route('/bouckita/formulaire', name: 'app_bouckita_formulaire')]
    Public function formulaire(): Response 
    {
        return $this->render('bouckita/formulaire.html.twig',[
            'controller_name' => 'BouckitaController',
        ]);
    }
    #[Route('/plus', name: 'app_bouckita_plus')]
    Public function plus(): Response 
    {
        return $this->render('/plus.html.twig',[
            'controller_name' => 'BouckitaController',
        ]);
    }
}
