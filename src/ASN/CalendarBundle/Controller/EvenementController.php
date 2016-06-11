<?php

namespace ASN\CalendarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ASN\CalendarBundle\Entity\Evenement;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

/**
 * Description of EvenementController
 *
 * @author Aurélien KOUAM
 */
class EvenementController extends Controller {

    public function create_evenementAction($agenda_id, $libelle, $description, $lieu, $date) {
        $em = $this->getDoctrine()->getManager();
        
        $agenda = $em->find("ASNCalendarBundle:Agenda", $agenda_id);
        
        $evenement = new Evenement();
        $evenement->setLibelle($libelle);
        $evenement->setDescription($description);
        $evenement->setLieu($lieu);
        $evenement->setDate(new \DateTime);
        $evenement->setAgenda($agenda);
        
        $em->persist($evenement);
        $em->flush();

        $response = new JsonResponse();
        return $response->setData(array("data" => true));
    }

    public function delete_evenementAction($id) {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $agenda = $em->getRepository("ASNCalendarBundle:Evenement")->findById($id);
        $em->remove($agenda[0]);
        $em->flush();
        return $this->render('ASNCalendarBundle::layout.html.twig', array(
                    'agendas' => $user->getAgendas()
        ));
    }

    public function update_evenementAction($id, $libelle, $description) {
        $em = $this->getDoctrine()->getManager();

        $agenda = $em->find("ASNCalendarBundle:Evenement", $id);
        $agenda->setLibelle($libelle);
        $agenda->setDescription($description);

        $em->merge($agenda);
        $em->flush();

        $response = new JsonResponse();
        return $response->setData(array("data" => true));
    }

}
