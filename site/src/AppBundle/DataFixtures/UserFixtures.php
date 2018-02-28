<?php
namespace AppBundle\DataFixtures;

use AppBundle\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class UserFixtures extends Fixture{


    public function load(ObjectManager $manager){

        $users = [
            [
                'email' => 'ttalbiadil@gmail.com',
                'firstName' => 'Aadil',
                'lastName' => 'Ttalbi',
                //password: Test
                'password' => '$2y$10$kvLmaYsbNU/ENeRmeTuyVumlhaI0J2oZqokGlE0qiUOzdTGX.uViO',
                'isAdmin' => '0',
            ],
            [
                'email' => 'hamza@mail.fr',
                'firstName' => 'Hamza',
                'lastName' => 'Krichel',
                //password: Test
                'password' => '$2y$10$kvLmaYsbNU/ENeRmeTuyVumlhaI0J2oZqokGlE0qiUOzdTGX.uViO',
                'isAdmin' => '1',
            ],
        ];

        foreach ($users as $user) {

            $project = new User();
            $project
                ->setEmail($user['email'])
                ->setFirstName($user['firstName'])
                ->setLastName($user['lastName'])
                ->setPassword($user['password'])
                ->setIsAdmin($user['isAdmin']);
            $manager->persist($project);
        }

        $manager->flush();
    }
}