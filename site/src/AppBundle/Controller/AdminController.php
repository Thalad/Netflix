<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Episode;
use AppBundle\Entity\Film;
use AppBundle\Entity\Season;
use AppBundle\Entity\Serie;
use AppBundle\Form\EpisodeType;
use AppBundle\Form\FilmsType;
use AppBundle\Form\SeasonsType;
use AppBundle\Form\SeriesType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;


class AdminController extends Controller
{
    /**
     * @Route("/admin/filmAdd", name="film_add")
     */
    public function addAction(Request $request)
    {
        $film = new Film();
        $form = $this->createForm(FilmsType:: class, $film);
        $form->handleRequest( $request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($film);
            $em->flush();
            return $this->redirectToRoute( 'admin_page');
        }
        return $this->render('admin/add.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/admin/serieAdd", name="serie_add")
     */

    public function addFilmAction(Request $request)
    {
        $serie = new Serie();
        $form = $this->createForm(SeriesType::class, $serie);
        $form->handleRequest( $request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($serie);
            $em->flush();
            return $this->redirectToRoute( 'admin_page');
        }
        return $this->render('admin/add.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/admin/seasonAdd", name="season_add")
     */

    public function addSeasonAction(Request $request)
    {
        $season = new Season();
        $form = $this->createForm(SeasonsType::class, $season);
        $form->handleRequest( $request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($season);
            $em->flush();
            return $this->redirectToRoute( 'admin_page');
        }
        return $this->render('admin/add.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/admin/episodeAdd", name="episode_add")
     */

    public function addEpisodeAction(Request $request)
    {
        $episode= new Episode();
        $form = $this->createForm(EpisodeType::class, $episode);
        $form->handleRequest( $request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($episode);
            $em->flush();
            return $this->redirectToRoute( 'admin_page');
        }
        return $this->render('admin/add.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/admin", name="admin_page")
     */

    public function adminPage()
    {
        return $this->render('admin/homePageAdmin.html.twig');
    }
}
