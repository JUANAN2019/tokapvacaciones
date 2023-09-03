<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChecktokenController extends AbstractController
{
    #[Route('/checktoken', name: 'app_checktoken')]
    public function index(): Response
    {
        return $this->render('checktoken/index.html.twig', [
            'controller_name' => 'ChecktokenController',
        ]);
    }
}
