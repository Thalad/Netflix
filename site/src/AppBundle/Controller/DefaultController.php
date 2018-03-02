<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Category;
use AppBundle\Entity\Film;
use AppBundle\Entity\Serie;
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
    public function listFilm()
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
    public function viewFilm($id)
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

    /**
     * @Route("/series", name="series_list")
     */
    public function listSerie()
    {
        $em = $this->getDoctrine()->getManager();
        $series = $em->getRepository(Serie:: class)
            ->findAll();
        return $this->render('serie/listSerie.html.twig', [
            'series' => $series
        ]);
    }

    /**
     * @Route("/series/{id}", name="serie_view", requirements={"id"="\d+"})
     */
    public function viewSerie($id)
    {
        $em = $this->getDoctrine()->getManager();
        $serie = $em->getRepository(Serie:: class)
            ->find($id);
        return $this->render('serie/viewSerie.html.twig', [
            'serie' => $serie
        ]);
    }

    /**
     * @Route("films/category/{id}", name="categoryFilm_view", requirements={"id"="\d+"})
     */
    public function categoryFilm($id)
    {
        $em = $this->getDoctrine()->getManager();
        $category = $em->getRepository(Category:: class)
            ->find($id);
        return $this->render('category/categoryFilm.html.twig', [
            'category' => $category
        ]);
    }

    /**
 * @Route("series/category/{id}", name="categorySerie_view", requirements={"id"="\d+"})
 */
    public function categorySerie($id)
    {
        $em = $this->getDoctrine()->getManager();
        $category = $em->getRepository(Category:: class)
            ->find($id);
        return $this->render('category/categorySerie.html.twig', [
            'category' => $category
        ]);
    }

    /**
     * @Route("/films/", name="admin_page")
     */

    /**public function adminPage()
    {
        return $this->render('admin/homePageAdmin.html.twig');
    }*/

}
