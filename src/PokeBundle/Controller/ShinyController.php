<?php

namespace PokeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use PokeBundle\Form\PokemonType;
use PokeBundle\Form\ShinyType;
use PokeBundle\Form\CommentType;
use PokeBundle\Entity\Pokemon;
use PokeBundle\Entity\Shiny;
use UserBundle\Entity\User;
use PokeBundle\Entity\Comment;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Doctrine\ORM\Tools\Pagination\Paginator;

class ShinyController extends Controller
{

	/**
     * @Route("/shiny/ajouter-{slug}", name="poke_add_shiny_pokemon")
     */
    public function addAction(Request $request, $slug)
    {
        // TODO : Validation URL youtube
        $session = new Session();
        $shiny = new Shiny();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getEntityManager();
        $pokemon = $em->getRepository('PokeBundle:Pokemon')->findOneBySlug($slug);
        if(!$pokemon){
            throw new NotFoundHttpException("Ce Pokemon n'existe... Peut-être dans la prochaine génération? ;)");
        }
        \Doctrine\Common\Util\Debug::dump($user);
        if($user->hasPokemon($pokemon->getId())){
            throw new NotFoundHttpException("Vous avez déjà validé ce pokemon.");
        }

        $form = $this->createForm(ShinyType::class, $shiny);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
             $shiny->setPokemon($pokemon);
             $shiny->setUser($user);
             $em->persist($shiny);
             $em->flush();
             $session->getFlashBag()->add('notice', 'Le shiny a été ajouté. Félicitations !');
        }

        return $this->render('PokeBundle:Shiny:add.html.twig', array(
            'form' => $form->createView(),
            'pokemon' => $pokemon
        ));
    }
    /**
     * @Route("/shiny/{hunter}-{pokemon}-p{page}", name="poke_show_shiny_pokemon")
     */
    public function showAction(Request $request, $hunter, $pokemon, $page)
    {
        $session = new Session();
        $comment = new Comment();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getEntityManager();
        $commentManager = $this->get('poke.comment_manager');

        $hunter = $em->getRepository('UserBundle:User')->findOneByUsername($hunter);
        if(!$hunter){
            throw new NotFoundHttpException("Ce chasseur n'existe pas.");
        }  

        $shiny = $em->getRepository('PokeBundle:Shiny')->getShinyByPokemonAndHunter($hunter, $pokemon);
        if(!$shiny){
            throw new NotFoundHttpException("Ce shiny n'a pas encore été capturé !");
        } 
        $comments = $commentManager->loadComments($hunter,$shiny, $page);
        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
             $comment->setSendBy($user);
             $comment->setUser($hunter);
             $commentManager->saveComment($comment);
             $session->getFlashBag()->add('notice', 'Le commentaire a été ajouté. Félicitations !');
        }

        return $this->render('PokeBundle:Shiny:show.html.twig', array(
            'shiny' => $shiny,
            'comments' => $comments,
            'form' => $form->createView()
        ));
    }
}