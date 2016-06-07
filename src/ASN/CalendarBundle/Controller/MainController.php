<?php

namespace ASN\CalendarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('ASNCalendarBundle::layout.html.twig');
    }
}
