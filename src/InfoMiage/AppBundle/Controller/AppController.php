<?php

namespace InfoMiage\AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use InfoMiage\AppBundle\InfoMiageAppBundle;

class AppController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
    	//Ici remplacer par import index.html.twig et mettre en place ce dernier
        //return new Response("Hello world !");

    	return $this->render('InfoMiageAppBundle:Accueil:index.html.twig');
    	
    }
    
    public function articleAction($id, Request $request)
    {
    	
    }
}
