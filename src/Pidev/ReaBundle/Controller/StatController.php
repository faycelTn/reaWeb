<?php

namespace Pidev\ReaBundle\Controller;

//use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Agence controller.
 *
 */
class StatController extends Controller{

    public function agenceZoneAction()
    {
    $em = $this->getDoctrine()->getManager();
    $stats= $em->getRepository("PidevReaBundle:Agence")->nbrAgence();
     return $this->render("PidevReaBundle:Stat:nbrAgenceZone.html.twig", array('stats' => $stats));
    }
    public function nbrInscritMoisAction()
    {
    $em = $this->getDoctrine()->getManager();
    $stats= $em->getRepository("PidevReaBundle:Agence")->nbrInscritMois();
    return $this->render("PidevReaBundle:Stat:nbrInscritMois.html.twig", array('stats' => $stats));
    }
public function nbrOffreClientAgenceAction($id)
    {
    $em = $this->getDoctrine()->getManager();
    $stats= $em->getRepository("PidevReaBundle:Agence")->nbrOffreClientAgence($id);
    return $this->render("PidevReaBundle:Stat:nbrOffreClientAgence.html.twig", array('stats' => $stats));
    }
public function offreAgenceAction($id)
    {
    $em = $this->getDoctrine()->getManager();
    $stats= $em->getRepository("PidevReaBundle:Agence")->offreAgence($id);
    return $this->render("PidevReaBundle:Stat:offreAgence.html.twig", array('stats' => $stats));
    }
public function nbrRdvClientAgenceAction($id)
    {
    $em = $this->getDoctrine()->getManager();
    $stats= $em->getRepository("PidevReaBundle:Agence")->nbrRdvClientAgence($id);
    return $this->render("PidevReaBundle:Stat:nbrRdvClientAgence.html.twig", array('stats' => $stats));
    }
public function nbrRdvAgentAgenceAction($id)
    {
    $em = $this->getDoctrine()->getManager();
    $stats= $em->getRepository("PidevReaBundle:Agence")->nbrRdvAgenttAgence($id);
    return $this->render("PidevReaBundle:Stat:nbrRdvAgentAgence.html.twig", array('stats' => $stats));
    }
public function nbrOperationClientAgenceAction($id)
    {
    $em = $this->getDoctrine()->getManager();
    $stats= $em->getRepository("PidevReaBundle:Agence")->nbrOperationClientAgence($id);
    return $this->render("PidevReaBundle:Stat:nbrOperationClientAgence.html.twig", array('stats' => $stats));
    }
}
