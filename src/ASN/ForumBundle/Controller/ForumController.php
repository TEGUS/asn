<?php

namespace ASN\ForumBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ForumController extends Controller
{
    public function indexAction()
    {
        // Activation de l'item du menu
        active_item_menu($this);
        
        return $this->render('ASNForumBundle:Forum:index.html.twig');
    }
}


/*
 *  Fonction permettant d'activer l'item du menu
 * en modifiant la variable de session menu_actif
 */
function active_item_menu(ForumController $controller) 
{
    $request = $controller->getRequest();
    $session = $request->getSession();

    $session->set('module_actif', 'forums');
}
