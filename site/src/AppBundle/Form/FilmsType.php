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
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;



class FilmsType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('name', TextType:: class)
            ->add('actor', TextType:: class)
            ->add('date', DateType:: class)
            ->add('description', TextareaType:: class)
            ->add('note', NumberType:: class)
            ->add('category', EntityType::class, array(
                'class' => 'AppBundle:Category',
                'choice_label' => 'label',
            ))
            ->add('image', FileType::class, array(
                'label' => 'Image',
                'required' => false
            ))
            ->add('video', FileType::class, array(
                'label' => 'Vidéo',
                'required' => false
            ))
            ->add('save', SubmitType:: class, ['label' => 'Ajouter un film']);
    }

}