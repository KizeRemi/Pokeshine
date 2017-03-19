<?php

namespace PokeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class ReportController extends Controller
{
	/**
     * @Route("/report/{username}", name="poke_add_report")
     */
    public function addAction(Request $request, $username)
    {
    	$em = $this->getDoctrine()->getEntityManager();
    	$reporter = $this->get('security.token_storage')->getToken()->getUser();
    	$user = $em->getRepository('UserBundle:User')->findOneByUsername($username);
        if (!$user) {
            throw $this->createNotFoundException("Ce shasseur n'existe pas.");
        }

        $reportManager = $this->get('poke.reporter_manager');
        $hasReport = $reportManager->hasAlreadyReport($reporter, $user);

        if(!$hasReport){
            $reportManager->reportUser($reporter, $user);
        } 
        
        $reportManager->countReportForUser($user);

		$referer = $request->headers->get('referer');
		return $this->redirect($referer);
    }
}