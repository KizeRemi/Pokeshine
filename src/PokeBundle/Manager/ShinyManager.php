<?php

namespace PokeBundle\Manager;

use PokeBundle\Manager\BaseManager;
use PokeBundle\Entity\Shiny;
use Doctrine\ORM\EntityManager;

class ShinyManager extends BaseManager
{
	protected $em;

	public function __construct(EntityManager $em){
		$this->em = $em;
	}

	public function createShiny()
	{
		$shiny = new Shiny();
		return $shiny;
	}

	public function saveShiny(Shiny $shiny){
		$this->persistAndFlush($shiny);
	}
	
	public function hydrate($shiny, $user, $pokemon){
        $shiny->setUser($user);
        $shiny->setPokemon($pokemon);
        return $shiny;
	}

	public function findShinyByPokemonAndUser($hunter, $pokemon){
		$shiny = $this->getRepository()->getShinyByPokemonAndHunter($hunter, $pokemon);
		return $shiny;
	}

	public function findLastShinies($number){
		$shinies = $this->getRepository()->getLastShinies($number);
		return $shinies;
	}

	public function getRepository(){
		return $this->em->getRepository('PokeBundle:Shiny');
	}
}