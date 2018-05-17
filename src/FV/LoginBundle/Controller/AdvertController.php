<?php

// src/FV/LoginBundle/Controller/AdvertController.php

namespace FV\LoginBundle\Controller;

// N'oubliez pas ce use :
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{
  public function indexAction()
  {
    $content = $this->get('templating')->render('FVLoginBundle:Advert:index.html.twig',array('nom' => 'winzou'));
    return new Response($content);
  }
}