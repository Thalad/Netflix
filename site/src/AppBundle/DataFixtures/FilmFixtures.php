<?php
namespace AppBundle\DataFixtures;

use AppBundle\Entity\Film;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
class FilmFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $films = [
            [
                'name' => 'Film #1',
                'description' => 'test 1',
                'date' => new \DateTime('2017-01-01'),
                'actor' => 'Adil Bond',
                'note' => '9',
            ],
            [
                'name' => 'Film #2',
                'description' => 'test 1',
                'date' => new \DateTime('2017-01-01'),
                'actor' => 'Adil Bond',
                'note' => '9',
            ],
            [
                'name' => 'Film #3',
                'description' => 'test 1',
                'date' => new \DateTime('2017-01-01'),
                'actor' => 'Adil Bond',
                'note' => '9',
            ],
            [
                'name' => 'Film #4',
                'description' => 'test 1',
                'date' => new \DateTime('2017-01-01'),
                'actor' => 'Adil Bond',
                'note' => '9',
            ],
        ];

        foreach ($films as $film) {

            $project = new Film();
            $project
                ->setName($film['name'])
                ->setDescription($film['description'])
                ->setDate($film['date'])
                ->setActor($film['actor'])
                ->setNote($film['note']);
            $manager->persist($project);
        }

        $manager->flush();
    }
}