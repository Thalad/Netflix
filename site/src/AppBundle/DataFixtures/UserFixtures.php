<?php
namespace AppBundle\DataFixtures;

use AppBundle\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class UserFixtures extends Fixture{


    public function load(ObjectManager $manager){
        $user = new User();
        $user
            ->setEmail('hamza@mail.fr')
            ->setFirstName('Hamza')
            ->setLastName('Krichel')
            //password: Test
            ->setPassword('$2y$10$kvLmaYsbNU/ENeRmeTuyVumlhaI0J2oZqokGlE0qiUOzdTGX.uViO');

        $manager->persist($user);
        $manager->flush();
    }
}