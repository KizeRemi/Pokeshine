<?php
namespace PokeBundle\Service;

use Symfony\Component\HttpFoundation\Response;
use PokeBundle\Entity\Report;
use UserBundle\Entity\User;
use Doctrine\ORM\EntityManager;

class Reporter
{
	private $em;

    public function __construct(EntityManager $entityManager) {
    	 $this->em = $entityManager;
    }

	public function reportUser(User $reporter, User $user) {
		$report = new Report();
		$report->setReporter($reporter);
		$report->setUser($user);

        $this->em->persist($report);
        $this->em->flush();
	}

	public function hasAlreadyReport(User $reporter, User $user){
		$result = $this->em->getRepository('PokeBundle:Report')->hasReport($reporter, $user);
		return $result;
	}

	public function countReportForUser(User $user){
		$result = $this->em->getRepository('PokeBundle:Report')->countReportForUser($user);
		return $result;
	}
}