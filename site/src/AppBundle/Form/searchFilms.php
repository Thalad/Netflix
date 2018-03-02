<?php

namespace AppBundle\Form;

use AppBundle\Entity\Film;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;



class searchFilms extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('film', TextType:: class)
            // false
            ->add('search', SubmitType:: class, ['label' => 'Chercher un Film']);
    }

}