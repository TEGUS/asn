<?php

namespace Avm\AsnBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AvmAsnBundle:user:home.html.twig');
    }
    
    public function registerAction()
    {
        return $this->render('AvmAsnBundle:user:register.html.twig');
    }
}