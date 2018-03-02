<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Category;
use AppBundle\Entity\Film;
use AppBundle\Form\searchFilms;
use AppBundle\Repository\FilmRepository;
use AppBundle\Entity\Serie;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class DefaultController extends Controller
{
    /**
     *
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }*/

    /**
     * @Route("/home/films", name="films_list")
     */
    public function listFilm()
    {
        $em = $this->getDoctrine()->getManager();

        $films = $em->getRepository(Film:: class)
            ->findAll();
        return $this->render('film/listFilm.html.twig', [
            'films' => $films,
        ]);
    }

    /**
     * @Route("/home/searchFilms", name="films_search")
     */
    public function searchFilms()
    {

        $em = $this->getDoctrine()->getManager();

        /** @var FilmRepository $filmRepository */
        $filmRepository = $em->getRepository(Film::class);

        $search = $filmRepository->searchProject('parker');

        $form = $this->createFormBuilder($search)
            ->add('film', TextType:: class)
            ->add('search', SubmitType:: class, ['label' => 'Chercher un Film'])
            ->getForm();

        //$form = $this->createForm(searchFilms);

        return $this->render('inc/header.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/home/films/{id}", name="film_view", requirements={"id"="\d+"})
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
     * @Route("/home/series", name="series_list")
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
     * @Route("/home/series/{id}", name="serie_view", requirements={"id"="\d+"})
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
     * @Route("/films/category/{id}", name="categoryFilm_view", requirements={"id"="\d+"})
     */
    public function viewCategoryFilm($id)
    {
        $em = $this->getDoctrine()->getManager();
        $category = $em->getRepository(Category:: class)
            ->find($id);
        return $this->render('category/categoryFilmView.html.twig', [
            'category' => $category
        ]);
    }

    /**
 * @Route("/series/category/{id}", name="categorySerie_view", requirements={"id"="\d+"})
 */
    public function viewCategorySerie($id)
    {
        $em = $this->getDoctrine()->getManager();
        $category = $em->getRepository(Category:: class)
            ->find($id);
        return $this->render('category/categorySerieView.html.twig', [
            'category' => $category
        ]);
    }


    /**
     * @Route("/home/films/category", name="categoryFilm_page")
     */

    public function categoryFilm()
    {
        $em = $this->getDoctrine()->getManager();
        $category = $em->getRepository(Category:: class)
            ->findAll();
        return $this->render('category/categoryFilm.html.twig', [
            'category' => $category
        ]);
    }

    /**
     * @Route("/home/series/category", name="categorySerie_page")
     */

    public function categorySerie()
    {
        $em = $this->getDoctrine()->getManager();
        $category = $em->getRepository(Category:: class)
            ->findAll();
        return $this->render('category/categorySerie.html.twig', [
            'category' => $category
        ]);
    }

    /**
     * @Route("/", name="home_page")
     */

    public function homePage()
    {
        return $this->render('home/home.html.twig');
    }

}
