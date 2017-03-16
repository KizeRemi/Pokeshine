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
        $shinyManager = $this->get('poke.shiny_manager');
        $lastShinies = $shinyManager->findLastShinies(10);

        $searchForm = $this->createForm(SearchUserType::class, null, array(
            'action' => $this->generateUrl('user_user_show'),
            'method' => 'POST',
        ));
        $searchForm->handleRequest($request);

        return $this->render('PokeBundle:Default:home.html.twig', array(
			'lastShinies' => $lastShinies,
            'searchForm' => $searchForm->createView()
        ));
    }
}
