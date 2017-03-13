<?php
namespace PokeBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

class CommentRepository extends EntityRepository
{
	public function getCommentsByShiny($shiny, $user, $page, $nbPerPage){
		$query =  $this ->createQueryBuilder('c')
					    ->where('c.shiny = :shiny')
					    ->andWhere('c.user = :user')
					    ->setParameter('shiny', $shiny)
					    ->setParameter('user', $user)
	  					->getQuery();
	  	    

  		$query  ->setFirstResult(($page-1) * $nbPerPage)
				->setMaxResults($nbPerPage);

		return new Paginator($query, true);
	}
}