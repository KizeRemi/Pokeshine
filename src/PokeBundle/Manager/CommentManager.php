<?php

namespace PokeBundle\Manager;

use PokeBundle\Manager\BaseManager;
use PokeBundle\Entity\Comment;
use Doctrine\ORM\EntityManager;

class CommentManager extends BaseManager
{
	protected $em;

	public function __construct(EntityManager $em){
		$this->em = $em;
	}

	public function saveComment(Comment $comment){
		$this->persistAndFlush($comment);
	}

	public function loadComments($user, $shiny, $page){
		$nbPerPage = 10;
		return $this->getRepository()->getCommentsByShiny($shiny, $user, $page, $nbPerPage);
	}

	public function getRepository(){
		return $this->em->getRepository('PokeBundle:Comment');
	}
}