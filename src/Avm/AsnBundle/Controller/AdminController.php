<?php

namespace Avm\AsnBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of AdminController
 *
 * @author Aurélien KOUAM
 */
class AdminController extends Controller {

    //put your code here

    public function indexAction() {
        return $this->render("AvmAsnBundle:admin:index.html.twig");
    }

}
