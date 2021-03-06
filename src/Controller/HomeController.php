<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage()
    {
        return $this->render('/home/home.html.twig',[
            'title' => 'Home'
        ]);
    }

    /**
     * @Route("/login", name="app_login")
     */
    public function login()
    {
        return $this->render('@Security/Collector/security.html.twig',[
            'title' => 'Login'
        ]);
    }

}