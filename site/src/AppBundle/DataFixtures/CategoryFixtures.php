<?php
namespace AppBundle\DataFixtures;

use AppBundle\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CategoryFixtures extends Fixture{


    public function load(ObjectManager $manager){
        $category = new Category();
        $category
            ->setLabel('Action');

        $manager->persist($category);
        $manager->flush();
        $this->addReference('category1', $category);

        $category2 = new Category();
        $category2
            ->setLabel('Humour');

        $manager->persist($category2);
        $manager->flush();
        $this->addReference('category2', $category2);

        $category3 = new Category();
        $category3
            ->setLabel('Fantastique');

        $manager->persist($category3);
        $manager->flush();
        $this->addReference('category3', $category3);
    }
    
}