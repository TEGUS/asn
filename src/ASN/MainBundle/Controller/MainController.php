<?php

namespace ASN\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{

    public function indexAction() 
    {
        
        // Activation l'item du menu
        active_item_menu($this);

        $user = $this->getUser();
        if ($user == null) {
            return $this->redirect($this->generateUrl('asn_login'));
        }
        return $this->render('ASNMainBundle:Main:index.html.twig');
    }

}


/*
 *  Fonction permettant d'activer l'item du menu
 * en modifiant la variable de session menu_actif
 */
function active_item_menu(MainController $controller) 
{
    $request = $controller->getRequest();
    $session = $request->getSession();

    $session->set('module_actif', 'accueil');
}
