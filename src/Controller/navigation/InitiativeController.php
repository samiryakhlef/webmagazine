<?php

namespace App\Controller\navigation;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InitiativeController extends AbstractController
{
    #[Route('/initiative', name: 'app_initiative')]
    public function index(): Response
    {
        return $this->render('initiative/index.html.twig', [
            'controller_name' => 'InitiativeController',
        ]);
    }
}
