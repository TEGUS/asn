<?php

namespace ASN\CalendarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ASN\CalendarBundle\Entity\Agenda;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use ASN\CalendarBundle\Form\AgendaType;

/**
 * Description of AgendaController
 *
 * @author Aurélien KOUAM
 */
class AgendaController extends Controller {

    public function getAgendasAction() {
        $agendas = $this->getDoctrine()->getRepository("ASNCalendarBundle:Agenda")->findByUser($this->getUser());
        return $agendas;
    }

    public function create_agendaAction($libelle, $description) {
        $agenda = new Agenda();
        $agenda->setLibelle($libelle);
        $agenda->setDescription($description);
        $agenda->setUser($this->getUser());

        $em = $this->getDoctrine()->getManager();
        $em->persist($agenda);
        $em->flush();

        $response = new JsonResponse();
        return $response->setData(array("data" => true));
    }

    public function delete_agendaAction($id) {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $agenda = $em->getRepository("ASNCalendarBundle:Agenda")->findById($id);
        $em->remove($agenda[0]);
        $em->flush();
        return $this->render('ASNCalendarBundle::layout.html.twig', array(
                    'agendas' => $user->getAgendas()
        ));
    }

    public function update_agendaAction($id, $libelle, $description) {
        $em = $this->getDoctrine()->getManager();

        $agenda = $em->find("ASNCalendarBundle:Agenda", $id);
        $agenda->setLibelle($libelle);
        $agenda->setDescription($description);

        $em->merge($agenda);
        $em->flush();

        $response = new JsonResponse();
        return $response->setData(array("data" => true));
    }

}
