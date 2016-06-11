<?php

namespace ASN\CalendarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller {

    public function indexAction() {
        $user = $this->getUser();
        if ($user == null) {
            return $this->redirect($this->generateUrl('asn_login'));
        }

        return $this->render('ASNCalendarBundle::layout.html.twig');
    }
}
