<?php

namespace PokeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use PokeBundle\Form\PokemonType;
use PokeBundle\Entity\Pokemon;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Doctrine\ORM\Tools\Pagination\Paginator;

class PokemonController extends Controller
{

    /**
     * @Route("/pokemon/generation/{gen}/{page}", name="poke_collector_pokemon")
     */
    public function showAction(Request $request, $gen, $page)
    {
        $session = new Session();
        $nbTotalPerPokemon = array(151, 100, 135, 107, 156, 72, 81);
        if ($page < 1) {
          throw $this->createNotFoundException("La page n'existe pas.");
        }

        $nbPerPage = 20;

        $em = $this->getDoctrine()->getEntityManager();
        $pokemons = $em->getRepository('PokeBundle:Pokemon')->getPokemonsByGeneration($gen,$page,$nbPerPage);

        $nbPages = ceil(count($pokemons)/$nbPerPage);

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
            'nbTotalPerPokemon' => $nbTotalPerPokemon
        ));
    }

    /**
     * @Route("/admin/pokemon/{id}", name="poke_admin_edit_pokemon")
     */
    public function editAction(Request $request, $id)
    {
    	$session = new Session();
    	$em = $this->getDoctrine()->getEntityManager();
        $pokemon = $em->getRepository('PokeBundle:Pokemon')->findOneByNumber($id);

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