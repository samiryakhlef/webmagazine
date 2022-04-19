<?php

namespace App\Controller\navigation;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PortraitController extends AbstractController
{
    #[Route('/portrait', name: 'app_portrait')]
    public function index(): Response
    {
        return $this->render('portrait/index.html.twig', [
            'controller_name' => 'PortraitController',
        ]);
    }
}
