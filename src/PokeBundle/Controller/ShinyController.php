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

class ShinyController extends Controller
{

	/**
     * @Route("/shiny/ajouter_{slug}", name="poke_add_shiny_pokemon")
     */
    public function addAction(Request $request, $slug)
    {
        $session = new Session();
        $shiny = new Shiny();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getEntityManager();
        $pokemon = $em->getRepository('PokeBundle:Pokemon')->findOneBySlug($slug);

        if($user->hasPokemon($pokemon->getId())){
            throw new NotFoundHttpException("Vous avez déjà validé ce pokemon.");
        }
        if(!$pokemon){
            throw new NotFoundHttpException("Ce Pokemon n'existe... Peut-être dans la prochaine génération? ;)");
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

        return $this->render('PokeBundle:Shiny:add.html.twig', array(
            'form' => $form->createView(),
            'pokemon' => $pokemon
        ));
    }
}