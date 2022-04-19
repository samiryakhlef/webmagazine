<?php

namespace App\Controller\navigation;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PresdechezvousController extends AbstractController
{
    #[Route('/presdechezvous', name: 'app_presdechezvous')]
    public function index(): Response
    {
        return $this->render('presdechezvous/index.html.twig', [
            'controller_name' => 'PresdechezvousController',
        ]);
    }
}
