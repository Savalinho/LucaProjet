<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjetLucaController extends AbstractController
{
    /**
     * @Route("/projet/luca", name="projet")
     */
    public function index(): Response
    {
        return $this->render('projet_luca/index.html.twig', [
            'controller_name' => 'ProjetLucaController',
        ]);
    }
    /**
     * @Route("/luca", name="test2")
     */
    public function home(): Response
    {
        return $this->render("projet_luca/base.html.twig");
    }

     /**
     * @Route("/CV", name="test1")
     */
    public function CV(): Response
    {
        return $this->render("projet_luca/CV.html.twig");
    }

    /**
     * @Route("/Portfolio", name="test")
     */
    public function Portfolio(): Response
    {
        return $this->render("projet_luca/Portfolio.html.twig");
    }

     /**
     * @Route("/About", name="test4")
     */
    public function About(): Response
    {
        return $this->render("projet_luca/About.html.twig");
    }
     /**
     * @Route("/Formulaire", name="projet_luca")
     */
    public function Formulaire(): Response
    {
        return $this->render("projet_luca/Formulaire.html.twig");
    }
}


