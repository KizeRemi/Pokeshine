<?php

namespace PokeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use PokeBundle\Form\PokemonType;
use PokeBundle\Form\ShinyType;
use PokeBundle\Entity\Pokemon;
use PokeBundle\Entity\Shiny;
use UserBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Doctrine\ORM\Tools\Pagination\Paginator;

class PokemonController extends Controller
{

    /**
     * @Route("/pokemon/collection/generation_{gen}/page_{page}", name="poke_collector_pokemon")
     */
    public function showAction(Request $request, $gen, $page)
    {
        $session = new Session();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $nbTotalPerPokemon = array(151, 100, 135, 107, 156, 72, 81);
        if ($page < 1) {
          throw $this->createNotFoundException("La page n'existe pas.");
        }

        $nbPerPage = 20;

        $em = $this->getDoctrine()->getEntityManager();
        $pokemons = $em->getRepository('PokeBundle:Pokemon')->getPokemonsByGeneration($gen,$page,$nbPerPage);

        $shinies = $em->getRepository('PokeBundle:Shiny')->findByUser($user);
        $nbPages = ceil(count($pokemons)/$nbPerPage);
        \Doctrine\Common\Util\Debug::dump($shinies);
        if ($page > $nbPages) {
            throw $this->createNotFoundException("La page n'existe pas.");
        }

        if(!$pokemons){
            throw new NotFoundHttpException("Page not found");
        }
        
        return $this->render('PokeBundle:Pokemon:show_gen.html.twig', array(
            'pokemons' => $pokemons,
            'nbPages' => $nbPages,
            'page' => $page,
            'gen' => $gen,
            'nbPerPage' => $nbPerPage,
            'nbTotalPerPokemon' => $nbTotalPerPokemon,
            'shinies' => $shinies
        ));
    }

    /**
     * @Route("/pokemon/shiny/ajouter_{slug}", name="poke_add_shiny_pokemon")
     */
    public function addAction(Request $request, $slug)
    {
        $session = new Session();
        $shiny = new Shiny();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getEntityManager();
        $pokemon = $em->getRepository('PokeBundle:Pokemon')->findOneBySlug($slug);

        if(!$pokemon){
            throw new NotFoundHttpException("Page not found");
        }

        $form = $this->createForm(ShinyType::class, $shiny);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
             $em = $this->getDoctrine()->getManager();
             $shiny->setPokemon($pokemon);
             $shiny->setUser($user);
             $em->persist($shiny);
             $em->flush();
             $session->getFlashBag()->add('notice', 'Le shiny a été ajouté. Félicitations !');
        }

        return $this->render('PokeBundle:Pokemon:add_shiny.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/admin/pokemon/{slug}", name="poke_admin_edit_pokemon")
     */
    public function editAction(Request $request, $slug)
    {
    	$session = new Session();
    	$em = $this->getDoctrine()->getEntityManager();
      $pokemon = $em->getRepository('PokeBundle:Pokemon')->findOneBySlug($slug);
      if(!$pokemon){
          throw new NotFoundHttpException("Page not found");
      }
      $form = $this->createForm(PokemonType::class, $pokemon);
      $form->handleRequest($request);

      if ($form->isSubmitted() && $form->isValid()) {
           $em = $this->getDoctrine()->getManager();
           $em->persist($pokemon);
           $em->flush();
           $session->getFlashBag()->add('notice', 'Le pokemon a bien été modifié.');
      }

      return $this->render('PokeBundle:Admin:edit_poke.html.twig', array(
      	'pokemon' => $pokemon,
      	'form' => $form->createView()
      ));
    }
}