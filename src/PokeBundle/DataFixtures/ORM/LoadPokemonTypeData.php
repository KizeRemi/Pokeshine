<?php
Namespace PokeBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PokeBundle\Entity\PokemonType;

class LoadPokemonTypeData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
    	/* Tableau de tous les types de pokemon à insérer */
	    $types = array(
		    'Acier',
		    'Combat',
		    'Dragon',
		    'Eau',
		    'Electrik',
		    'Fée',
		    'Feu',
		    'Glace',
		    'Insecte',
		    'Normal',
		    'Plante',
		    'Poison',
		    'Psy',
		    'Roche',
		    'Sol',
		    'Spectre',
		    'Ténèbres',
		    'Vol'
		);
	    foreach ($types as $type) {
	      $pokemonType = new PokemonType();
	      $pokemonType->setName($type);
	      $manager->persist($pokemonType);
	      $this->addReference('type_'.$type, $pokemonType);
	    }
	    $manager->flush();
  	}

    public function getOrder()
    {
        return 1;
    }
}