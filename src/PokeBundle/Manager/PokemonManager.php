<?php

namespace PokeBundle\Manager;

use PokeBundle\Manager\BaseManager;
use PokeBundle\Entity\Pokemon;
use Doctrine\ORM\EntityManager;

class PokemonManager extends BaseManager
{
	protected $em;

	public function __construct(EntityManager $em){
		$this->em = $em;
	}

	public function createPokemon()
	{
		$pokemon = new Pokemon();
		return $pokemon;
	}

	public function findPokemonBySlug($slug){
		$pokemon = $this->getRepository()->findOneBySlug($slug);
		return $pokemon;
	}

	public function findPokemonsByGeneration($gen,$page,$nbPerPage){
		$pokemons = $this->getRepository()->getPokemonsByGeneration($gen,$page,$nbPerPage);
		return $pokemons;
	}

	public function savePokemon(Pokemon $pokemon){
		$this->persistAndFlush($pokemon);
	}
	
	public function getRepository(){
		return $this->em->getRepository('PokeBundle:Pokemon');
	}
}