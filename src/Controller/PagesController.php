<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PagesController extends AbstractController
{
    #[Route(
        '/',
        name: 'app_home',
        methods: ['GET'],
    )]
    public function home(): Response
    {
        return $this->render('pages/home.html.twig');
    }

    #[Route(
        '/about-us',
        name: 'app_about',
        methods: ['GET'],
    )]
    public function about(): Response
    {
        return $this->render('pages/about.html.twig');
    }
}
