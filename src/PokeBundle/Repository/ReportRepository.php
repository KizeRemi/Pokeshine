<?php

namespace PokeBundle\Repository;

class ReportRepository extends \Doctrine\ORM\EntityRepository
{
	public function hasReport($reporter, $user){
		$query =  $this ->createQueryBuilder('r')
					    ->where('r.user = :user')
					    ->andWhere('r.reporter = :reporter')
					    ->setMaxResults(1)
					    ->setParameter('user', $user)
					    ->setParameter('reporter', $reporter)
	  					->getQuery();
        return $query->getOneOrNullResult();
	}

	public function countReportForUser($user){
		$query =  $this ->createQueryBuilder('r')
						->select('COUNT(r)')
					    ->where('r.user = :user')
					    ->setParameter('user', $user)
	  					->getQuery();
        return $query->getSingleScalarResult();
	}
}
