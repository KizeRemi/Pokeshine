<?php
namespace PokeBundle\Repository;

use Doctrine\ORM\EntityRepository;

class LevelRepository extends EntityRepository
{
	public function getLevel($exp){
		$query =  $this ->createQueryBuilder('l')
						->select('l.level')
					    ->where('l.required <= :exp')
					    ->orderBy('l.required', 'DESC')
					    ->setMaxResults(1)
					    ->setParameter('exp', $exp)
	  					->getQuery();

        return $query->getSingleScalarResult();
	}

	public function getExpRequired($exp){
		$query =  $this ->createQueryBuilder('l')
						->select('l.required')
					    ->where('l.required > :exp')
					    ->orderBy('l.required', 'ASC')
					    ->setMaxResults(1)
					    ->setParameter('exp', $exp)
	  					->getQuery();

        return $query->getOneOrNullResult();
	}
}