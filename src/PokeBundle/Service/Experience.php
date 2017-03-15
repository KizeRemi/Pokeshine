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
		$experienceTotal = $currentExperience+$experience;

		if($experienceTotal < 200000){
			$user->setCurrentExp($experienceTotal);
		}
        $this->em->persist($user);
        $this->em->flush();
	}

	public function getLevelForUser(User $user)
	{
		$currentExperience = $user->getCurrentExp();
		$level = $this->em->getRepository('PokeBundle:Level')->getLevel($currentExperience);
		return $level;
	}

	public function getExpLeftForUser($currentExp)
	{
		$expRequired= $this->em->getRepository('PokeBundle:Level')->getExpRequired($currentExp);	
		if($expRequired != null){
			$expLeft = $expRequired['required']- $currentExp;
		} else {
			$expLeft = "MAX";
		}
		return $expLeft;
	}
}