<?php

namespace InfoMiage\CMSBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('InfoMiageCMSBundle:Default:index.html.twig');
    }
}
