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
}
