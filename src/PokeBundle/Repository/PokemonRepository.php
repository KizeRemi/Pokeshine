<?php
namespace PokeBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

class PokemonRepository extends EntityRepository
{
	public function getPokemonsByGeneration($gen, $page, $nbPerPage){
		$query =  $this ->createQueryBuilder('p')
					    ->where('p.generation = :gen')
					    ->setParameter('gen', $gen)
	  					->getQuery();
	  	    

  		$query  ->setFirstResult(($page-1) * $nbPerPage)
				->setMaxResults($nbPerPage);

		return new Paginator($query, true);
	}
}