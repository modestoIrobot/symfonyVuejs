<?php

namespace FV\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FVLoginBundle:Default:index.html.twig');
    }
}
