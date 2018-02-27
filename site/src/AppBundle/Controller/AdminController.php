<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Film;
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
        $form = $this->createFormBuilder( $film)
            ->add( 'name', TextType:: class)
            ->add( 'actor', TextType:: class)
            ->add( 'date', DateType:: class)
            ->add( 'description', TextType:: class)
            ->add( 'note', NumberType:: class)
            ->add( 'save', SubmitType:: class, ['label' => 'Ajouter un film'])
            ->getForm();
        $form->handleRequest( $request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($film);
            $em->flush();
            return $this->redirectToRoute( 'films_list');
        }
        return $this->render('admin/add.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
