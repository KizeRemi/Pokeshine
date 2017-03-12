<?php
Namespace PokeBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PokeBundle\Entity\HuntingMethod;

class LoadHuntingMethodData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
    	/* Tableau de tous les types de pokemon à insérer */
	    $methods = array(
		    'Oeuf',
		    'Rencontre aléatoire',
		    'Rencontre non aléatoire',
		    'Pokeradar',
		    'Reset',
		    'Evènement Nintendo'
		);
	    foreach ($methods as $method) {
	      $huntingMethod = new HuntingMethod();
	      $huntingMethod->setName($method);
	      $manager->persist($huntingMethod);
	    }
	    $manager->flush();
  	}

    public function getOrder()
    {
        return 4;
    }
}