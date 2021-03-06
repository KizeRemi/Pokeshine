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
     * @Route("/collection/generation-{gen}-page-{page}", name="poke_collector_pokemon")
     */
    public function showAction(Request $request, $gen, $page)
    {
        $session = new Session();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $pokemonManager = $this->get('poke.pokemon_manager');
        $paginationPokemon = array(
                              array( 'min' => 1, 'max' => 151),
                              array( 'min' => 152, 'max' => 251),
                              array( 'min' => 252, 'max' => 386),
                              array( 'min' => 387, 'max' => 493),
                              array( 'min' => 494, 'max' => 649),
                              array( 'min' => 650,' max' => 721),
                              array( 'min' => 494, 'max' => 802)
                            );

        if ($page < 1) {
          throw $this->createNotFoundException("La page n'existe pas.");
        }

        $nbPerPage = 40;
        $pokemons = $pokemonManager->findPokemonsByGeneration($gen,$page,$nbPerPage);
        $nbPages = ceil(count($pokemons)/$nbPerPage);

        if ($page > $nbPages) {
            throw $this->createNotFoundException("La page n'existe pas.");
        }

        if(!$pokemons){
            throw $this->createNotFoundException("La page n'existe pas.");
        }

        $myShinies = array();
        $shinies = $user->getShinies();
        foreach($shinies as $shiny){
          $myShinies[] = $shiny->getPokemon()->getId();
        }

        return $this->render('PokeBundle:Pokemon:collection.html.twig', array(
            'pokemons' => $pokemons,
            'nbPages' => $nbPages,
            'page' => $page,
            'gen' => $gen,
            'nbPerPage' => $nbPerPage,
            'paginationPokemon' => $paginationPokemon,
            'shinies' => $myShinies
        ));
    }

    /**
     * @Route("/admin/pokemon/{slug}", name="poke_admin_edit_pokemon")
     */
    public function editAction(Request $request, $slug)
    {
    	$session = new Session();
      $pokemonManager = $this->get('poke.pokemon_manager');
      $pokemon = $pokemonManager->findPokemonBySlug($slug);
      if(!$pokemon){
          throw new NotFoundHttpException("Page not found");
      }
      $form = $this->createForm(PokemonType::class, $pokemon);
      $form->handleRequest($request);

      if ($form->isSubmitted() && $form->isValid()) {
           $pokemonManager->savePokemon($pokemon);
           $session->getFlashBag()->add('notice', 'Le pokemon a bien été modifié.');
      }

      return $this->render('PokeBundle:Admin:edit_poke.html.twig', array(
      	'pokemon' => $pokemon,
      	'form' => $form->createView()
      ));
    }
}