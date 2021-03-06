<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Category;
use AppBundle\Entity\Episode;
use AppBundle\Entity\Film;
use AppBundle\Entity\Season;
use AppBundle\Entity\Serie;
use AppBundle\Form\CategoryType;
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
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;


class AdminController extends Controller
{
    /**
     * @Route("/admin/filmAdd", name="film_add")
     */
    public function addFilm(Request $request)
    {
        $film = new Film();
        $form = $this->createForm(FilmsType:: class, $film);
        $form->handleRequest( $request);

        if ($form->isSubmitted() && $form->isValid()) {

            /** @var UploadedFile $file */
            $file = $film->getImage();
            $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();
            $file->move(
                $this->getParameter('images_directory'),
                $fileName
            );
            $film->setImage($fileName);

            /** @var UploadedFile $video */
            $video = $film->getVideo();
            $videoName = $this->generateUniqueFileName().'.'.$video->guessExtension();
            $video->move(
                $this->getParameter('videos_directory'),
                $videoName
            );
            $film->setVideo($videoName);


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

    public function addSerie(Request $request)
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

    public function addSeason(Request $request)
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

    public function addEpisode(Request $request)
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

    /**
     * @Route("/admin/categoryAdd", name="category_add")
     */

    public function addCategory(Request $request)
    {
        $category = new Category();
        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest( $request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($category);
            $em->flush();
            return $this->redirectToRoute( 'admin_page');
        }
        return $this->render('admin/add.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @return string
     */
    private function generateUniqueFileName()
    {
        return md5(uniqid());
    }
}
