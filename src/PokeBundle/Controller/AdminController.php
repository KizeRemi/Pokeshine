<?php

namespace PokeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use PokeBundle\Form\PokemonType;
use PokeBundle\Entity\Pokemon;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class AdminController extends Controller
{

    /**
     * @Route("/admin", name="poke_admin_index")
     */
    public function indexAction()
    {
    	
    	$em = $this->getDoctrine()->getEntityManager();
        $users = $em->getRepository('UserBundle:User')
           ->getLastUsers(10);
        return $this->render('PokeBundle:Admin:index.html.twig', array(
        	'users' => $users
        	));
    }

    /**
     * @Route("/admin/add/pokemon", name="poke_admin_add_pokemon")
     */
    public function addPokemonAction(Request $request)
    {
        $pokemon = new Pokemon();
        $session = new Session();

        $form = $this->createForm(PokemonType::class, $pokemon);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
             $em = $this->getDoctrine()->getManager();
             $em->persist($pokemon);
             $em->flush();
             $session->getFlashBag()->add('notice', 'Annonce bien enregistrée.');
             return $this->redirectToRoute('poke_admin_show_pokemon', array( 'gen' => $form->getData()->getGeneration()));
        }

        return $this->render('PokeBundle:Admin:add_poke.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/admin/show/pokemon/{gen}", name="poke_admin_show_pokemon")
     */
    public function showPokemonAction(Request $request,$gen)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $pokemons = $em->getRepository('PokeBundle:Pokemon')
           ->findByGeneration($gen);
        return $this->render('PokeBundle:Admin:show_poke.html.twig', array(
            'gen' => $gen,
            'pokemons' => $pokemons,
        ));
    }

    /**
     * @Route("/admin/show/users", name="poke_admin_show_users")
     */
    public function showUsersAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $users = $em->getRepository('UserBundle:User')
           ->findAll();
        return $this->render('PokeBundle:Admin:show_user.html.twig', array(
            'users' => $users,
        ));
    }
}
