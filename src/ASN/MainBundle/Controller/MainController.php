<?php

namespace ASN\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('ASNMainBundle:Main:index.html.twig');
    }
}
