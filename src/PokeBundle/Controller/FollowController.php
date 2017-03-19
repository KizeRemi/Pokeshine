<?php

namespace PokeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class FollowController extends Controller
{
	/**
     * @Route("/follow/{username}", name="poke_add_follow")
     */
    public function addAction(Request $request, $username)
    {
    	$em = $this->getDoctrine()->getEntityManager();
    	$follower= $this->get('security.token_storage')->getToken()->getUser();
    	$user = $em->getRepository('UserBundle:User')->findOneByUsername($username);
        if (!$user) {
            throw $this->createNotFoundException("Ce shasseur n'existe pas.");
        }

        $followManager = $this->get('poke.follower_manager');
        $hasFollow = $followManager->hasAlreadyFollow($follower, $user);
        if(!$hasFollow){
        	$followManager->addUserToFollower($follower, $user);
        } else {
        	$followManager->removeUserToFollower($hasFollow);
        }

		$referer = $request->headers->get('referer');
		return $this->redirect($referer);
    }
}