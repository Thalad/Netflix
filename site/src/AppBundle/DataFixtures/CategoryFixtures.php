<?php
namespace AppBundle\DataFixtures;

use AppBundle\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CategoryFixtures extends Fixture{


    public function load(ObjectManager $manager){
        $category = new Category();
        $category
            ->setLabel('Category #1');

        $manager->persist($category);
        $manager->flush();
        $this->addReference('category', $category);
    }
    
}