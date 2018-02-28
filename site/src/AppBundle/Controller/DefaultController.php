<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Film;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/films", name="films_list")
     */
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $films = $em->getRepository(Film:: class)
            ->findAll();
        return $this->render('film/listFilm.html.twig', [
            'films' => $films
        ]);
    }

    /**
     * @Route("/films/{id}", name="film_view", requirements={"id"="\d+"})
     */
    public function viewAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $film = $em->getRepository(Film:: class)
            ->find($id);
        return $this->render('film/viewFilm.html.twig', [
            'film' => $film
        ]);
    }


    // menu cat
    public function menuAction()
    {
        $categories = [
            'action', 'drame', 'horreur', 'comique', 'categorie 1', 'categorie 2'
        ];
        return $this->render('inc/menuCategories.html.twig', ['categories' => $categories]);
    }

}
