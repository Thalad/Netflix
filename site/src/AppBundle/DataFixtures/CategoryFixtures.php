<?php
namespace AppBundle\DataFixtures;

use AppBundle\Entity\Category;
use AppBundle\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CategoryFixtures extends Fixture{


    public function load(ObjectManager $manager){

    $categories = [
        [
            'label' => 'Action',
        ],
        [
            'label' => 'Aventure',
        ],
    ];

    foreach ($categories as $category) {

    $project = new Category();
    $project
    ->setLabel($category['label']);
    $manager->persist($project);
    }

    $manager->flush();
    }
}