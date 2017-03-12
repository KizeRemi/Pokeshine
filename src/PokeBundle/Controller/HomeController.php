<?php

namespace PokeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class HomeController extends Controller
{
    /**
     * @Route("/", name="poke_index_home")
     */
    public function indexAction()
    {
    	$em = $this->getDoctrine()->getEntityManager();
        $lastShinies = $em->getRepository('PokeBundle:Shiny')->getLastShinies(10);
        return $this->render('PokeBundle:Default:home.html.twig', array(
			'lastShinies' => $lastShinies
        ));
    }
}
