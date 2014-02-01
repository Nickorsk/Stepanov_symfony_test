<?php

namespace Stepanov\MarketBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MarketBundle:Default:index.html.twig', array('name' => $name));
    }
}
