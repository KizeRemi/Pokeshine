<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{
    /**
     * @Route("/user")
     */
    public function indexAction()
    {
        return $this->render('UserBundle:User:index.html.twig');
    }

    /**
     * @Route("/shasseur", name="user_user_show")
     */
    public function showAction(Request $request, $username)
    {
    	$em = $this->getDoctrine()->getEntityManager();
    	$hunter = $em->getRepository('UserBundle:User')->findOneByUsername($username);
        if (!$hunter) {
            throw $this->createNotFoundException("Ce shasseur n'existe pas.");
        }

        return $this->render('UserBundle:User:show.html.twig', array(
        	'hunter' => $hunter		
        ));
    }

}
