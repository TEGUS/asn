<?php

namespace ASN\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller {

    public function indexAction() {
        $user = $this->getUser();
        if ($user == null) {
            return $this->redirect($this->generateUrl('asn_login'));
        }
        return $this->render('ASNMainBundle:Main:index.html.twig');
    }
}
