<?php
namespace PokeBundle\Service;

use Symfony\Component\HttpFoundation\Response;
use PokeBundle\Entity\Follow;
use UserBundle\Entity\User;
use Doctrine\ORM\EntityManager;

class Follower
{
	private $em;

    public function __construct(EntityManager $entityManager) {
    	 $this->em = $entityManager;
    }

	public function addUserToFollower(User $follower, User $user) {
		$follow = new Follow();

		$follow->setFollower($follower);
		$follow->setUser($user);

        $this->em->persist($follow);
        $this->em->flush();
	}

	public function removeUserToFollower(Follow $follow) {
        $this->em->remove($follow);
        $this->em->flush();
	}

	public function hasAlreadyFollow(User $follower, User $user){

		$result = $this->em->getRepository('PokeBundle:Follow')->hasUser($follower, $user);
		return $result;
	}
}