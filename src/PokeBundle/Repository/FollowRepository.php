<?php

namespace PokeBundle\Repository;

class FollowRepository extends \Doctrine\ORM\EntityRepository
{
	public function hasUser($follower, $user){
		$query =  $this ->createQueryBuilder('f')
					    ->where('f.user = :user')
					    ->andWhere('f.follower = :follower')
					    ->setMaxResults(1)
					    ->setParameter('user', $user)
					    ->setParameter('follower', $follower)
	  					->getQuery();

        return $query->getOneOrNullResult();
	}
}
