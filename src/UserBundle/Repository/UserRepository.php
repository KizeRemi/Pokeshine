<?php
namespace UserBundle\Repository;

use Doctrine\ORM\EntityRepository;
 
class UserRepository extends EntityRepository
{

	public function getLastUsers($limit)
	{
		$query = $this->createQueryBuilder('u')
				->select('u')
   				->orderBy('u.id', 'DESC')
   				->setMaxResults($limit)
				->getQuery();
		return $query->getResult();
	}
}