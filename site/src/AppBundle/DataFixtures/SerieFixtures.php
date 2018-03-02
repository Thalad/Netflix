<?php
namespace AppBundle\DataFixtures;

use AppBundle\Entity\Serie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
class SerieFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $series = [
            [
                'name' => 'Serie #1',
                'description' => 'test 1',
                'date' => new \DateTime('2017-01-01'),
                'actor' => 'Adil Bond',
                'note' => '9',
                'category_id' => $this->getReference('category1') ,
            ],
            [
                'name' => 'Serie #2',
                'description' => 'test 1',
                'date' => new \DateTime('2017-01-01'),
                'actor' => 'Adil Bond',
                'note' => '9',
                'category_id' => $this->getReference('category2') ,
            ],
            [
                'name' => 'Serie #3',
                'description' => 'test 1',
                'date' => new \DateTime('2017-01-01'),
                'actor' => 'Adil Bond',
                'note' => '9',
                'category_id' => $this->getReference('category3') ,
            ],
            [
                'name' => 'Serie #4',
                'description' => 'test 1',
                'date' => new \DateTime('2017-01-01'),
                'actor' => 'Adil Bond',
                'note' => '9',
                'category_id' => $this->getReference('category1') ,

            ],
        ];

        foreach ($series as $serie) {

            $project = new Serie();
            $project
                ->setName($serie['name'])
                ->setDescription($serie['description'])
                ->setDate($serie['date'])
                ->setActor($serie['actor'])
                ->setNote($serie['note'])
                ->setCategory($serie['category_id']);
            $manager->persist($project);
        }

        $manager->flush();
    }
}