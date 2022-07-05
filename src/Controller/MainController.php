<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main_home")
     */

    public function home():Response
    {
        //recevoir et traiter les données d'un formulaire + enregistrer
        //interroger la base de données
        return  $this->render("main/home.html.twig");
    }

    /**
     * @Route("/test", name="main_test")
     */

    public function test(){
        return $this->render("main/test.html.twig");
    }

}