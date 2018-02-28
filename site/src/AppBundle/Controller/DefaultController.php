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
    public function viewAction(int $id)
    {
        $em = $this->getDoctrine()->getManager();
        $film = $em->getRepository(Film:: class)
            ->find($id);
        return $this->render('film/viewFilm.html.twig', [
            'film' => $film
        ]);
    }
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======

    public function headerAction()
    {
        return $this->render('AppBundle:Default:header.html.twig');
    }

    public function footerAction()
    {
        return $this->render('AppBundle:Default:footer.html.twig');
    }

    // menu cat
    public function menuAction()
    {
        $categories = [
            'action', 'drame', 'horreur', 'comique'
        ];
        return $this->render('inc/menuCategories.html.twig', ['categories' => $categories]);
    }

    /**
     * @Route("/films/add", name="film_add")
     */
    /**public function addAction(Request $request)
    {
        $film = new Film();
        $form = $this->createForm(FilmType:: class, $film);
        if ($form->isSubmitted() && $form->isValid()) {
            $article = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();
            return $this->redirectToRoute( 'film_list');
        }
        return $this->render('film/addFilm.html.twig', [
            'form' => $form->createView()
        ]);
    }*/
>>>>>>> 55a6cfae3bfd41d645fa1186b8cfb7b6c1617bbb
>>>>>>> 0e50c51cc67b95cf750c5cb380538d7afea63a37
}
