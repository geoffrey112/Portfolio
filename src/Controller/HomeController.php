<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController{

    public function home(){
        return $this->render('home.html.twig', [
            'titre'=>"Bienvenu (Utilisateur)"
        ]);
    }

    public function contact(){
        return $this->render('page/contact.html.twig');
    }

    public function developpeur(){
        return $this->render('page/developpeur.html.twig');
    }

    public function auteur(){
        return $this->render('page/auteur-compositeur.html.twig');
    }

    public function monteur(){
        return $this->render('page/monteur.html.twig');
    }

}


