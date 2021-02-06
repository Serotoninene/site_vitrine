<?php


namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bridge\Twig\Extension\HttpFoundationExtension;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PagesController extends AbstractController
{
    /**
     * @Route ("/", name= "homepage")
     */
    public function index (){
        return $this->render('/index.html.twig');
    }

    /**
     * @Route ("/projects", name = "projects")
     */
    public function projects(){
        return $this->render('/projects.html.twig');
    }

    /**
     * @Route ("/resume", name = "resume")
     */
    public function resume(){
        return $this->render('/resume.html.twig');
    }
}