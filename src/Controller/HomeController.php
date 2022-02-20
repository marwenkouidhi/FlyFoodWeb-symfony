<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        return $this->render('front.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/back", name="back")
     */
    public function back(): Response
    {
        return $this->render('backtemplate/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
