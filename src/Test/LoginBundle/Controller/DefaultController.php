<?php

namespace Test\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TestLoginBundle:Default:index.html.twig', array());
    }
}
