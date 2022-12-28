<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BouckitaController extends AbstractController
{
    #[Route('/bouckita', name: 'app_bouckita')]
    public function index(): Response
    {
        return $this->render('bouckita/index.html.twig', [
            'controller_name' => 'BouckitaController',
        ]);
    }
}
