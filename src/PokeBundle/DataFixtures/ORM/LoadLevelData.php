<?php
Namespace PokeBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PokeBundle\Entity\Level;

class LoadLevelData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
    	/* Tableau de tous les types de pokemon à insérer */
	    $levels = array(
	      '0',
	      '100',
	      '500',
	      '1000',
	      '1600',
	      '2200',
	      '2900',
	      '3600',
	      '4400',
	      '5200',
	      '6000',
	      '6900',
	      '7800',
	      '8800',
	      '9800',
	      '11000',
	      '12500',
	      '14200',
	      '16200',
	      '18500',
	      '21000',
	      '24000',
	      '28000',
	      '32000',
	      '36000',
	      '40000',
	      '45000',
	      '50000',
	      '55000',
	      '60000',
	      '65000',
	      '70000',
	      '75000',
	      '85000',
	      '95000',
	      '105000',
	      '120000',
	      '140000',
	      '160000',
	      '190000',
	      '220000'
	    );
	    $i = 1;
	    foreach ($levels as $level) {
	      $addLevel = new Level();
	      $addLevel->setLevel($i);
	      $addLevel->setRequired($level);
	      $manager->persist($addLevel);
	      $i++;
	    }
	    $manager->flush();
  	}

    public function getOrder()
    {
        return 5;
    }
}