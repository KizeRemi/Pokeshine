<?php

namespace PokeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use UserBundle\Form\SearchUserType;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends Controller
{
    /**
     * @Route("/", name="poke_index_home")
     */
    public function indexAction(Request $request)
    {
    	$em = $this->getDoctrine()->getEntityManager();
        $lastShinies = $em->getRepository('PokeBundle:Shiny')->getLastShinies(10);

        $searchForm = $this->createForm(SearchUserType::class, null, array(
            'action' => $this->generateUrl('poke_index_home'),
            'method' => 'POST',
        ));
        $searchForm->handleRequest($request);

        

        return $this->render('PokeBundle:Default:home.html.twig', array(
			'lastShinies' => $lastShinies,
            'searchForm' => $searchForm->createView()
        ));
    }
}
