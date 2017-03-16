<?php

namespace PokeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use PokeBundle\Form\PokemonType;
use PokeBundle\Form\ShinyType;
use PokeBundle\Form\CommentType;
use UserBundle\Entity\User;
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
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $xpManager = $this->get('poke.experience_manager');
        $shinyManager = $this->get('poke.shiny_manager');
        $pokemonManager = $this->get('poke.pokemon_manager');

        $xpManager = $this->get('poke.experience_manager');
        $xpManager->getLevelForUser($user);
        $xpManager->getExpLeftForUser($user->getCurrentExp());
       
        $pokemon = $pokemonManager->findPokemonBySlug($slug);

        if(!$pokemon){
            throw new NotFoundHttpException("Ce Pokemon n'existe... Peut-être dans la prochaine génération? ;)");
        }
        if($user->hasPokemon($pokemon->getId())){
            throw new NotFoundHttpException("Vous avez déjà validé ce pokemon.");
        }

        $shiny = $shinyManager->createShiny();
        $form = $this->createForm(ShinyType::class, $shiny);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $shinyManager->hydrate($shiny, $user, $pokemon);
            $shinyManager->saveShiny($shiny);
            $xpManager->setExperienceToUser($user, 100);
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
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $shinyManager = $this->get('poke.shiny_manager');
        $commentManager = $this->get('poke.comment_manager');
        $em = $this->getDoctrine()->getEntityManager();

        $hunter = $em->getRepository('UserBundle:User')->findOneByUsername($hunter);
        if(!$hunter){
            throw new NotFoundHttpException("Ce chasseur n'existe pas.");
        }  

        $shiny = $shinyManager->findShinyByPokemonAndUser($hunter, $pokemon);
        if(!$shiny){
            throw new NotFoundHttpException("Ce shiny n'a pas encore été capturé !");
        } 
        

        $comment = $commentManager->createComment();
        $comments = $commentManager->loadComments($hunter,$shiny, $page);
        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $comment = $commentManager->hydrate($comment, $shiny, $hunter, $user);
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