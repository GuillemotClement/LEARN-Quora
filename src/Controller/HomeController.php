<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    //controle qui gère l'entrée de l'application
    //premier argument correspond au l'adresse url. Ici ce sera la premiere page de l'appli
    //name correspond au nom de la route. Permet de se référé à la route en utilisant son nom
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
