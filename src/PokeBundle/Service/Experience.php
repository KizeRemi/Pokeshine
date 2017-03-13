<?php
namespace PokeBundle\Service;

use Symfony\Component\HttpFoundation\Response;
use UserBundle\Entity\User;
use Doctrine\ORM\EntityManager;

class Experience
{
	private $em;

    public function __construct(EntityManager $entityManager)
    {
    	 $this->em = $entityManager;
    }

	public function setExperienceToUser(User $user, $experience)
	{
		$currentExperience = $user->getCurrentExp();
		$currentLevel =  $user->getLevel();
		$experienceTotal = $currentExperience+$experience;
		/*if($experienceTotal >= $currentLevel->getRequired()){
       		$level = $this->em->getRepository('CoreBundle:Level')->findOneByLevel($currentLevel->getlevel()+1);
       		$currentExp = $experienceTotal-$currentLevel->getRequired();
       		$account->setCurrentExp($currentExp);
       		$account->setLevel($level);
		} else {
			$account->setCurrentExp($currentExperience+$experience);
		}*/
        $this->em->persist($account);
        $this->em->flush();
	}
}