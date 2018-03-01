<?php

namespace AppBundle\Form;

use AppBundle\Entity\Category;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class FilmsType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('name', TextType:: class)
            ->add('actor', TextType:: class)
            ->add('date', DateType:: class)
            ->add('description', TextType:: class)
            ->add('note', NumberType:: class)
            ->add('category', EntityType::class, array(
                'class' => 'AppBundle:Category',
                'choice_label' => 'label',
<<<<<<< HEAD
=======
                'multiple' => false,
                'expanded' => false,
>>>>>>> c21fdc957745ffaff85307237ae623ed5d731e2a
            ))
            ->add('save', SubmitType:: class, ['label' => 'Ajouter un film']);
    }
}