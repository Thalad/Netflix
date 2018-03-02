<?php
namespace AppBundle\DataFixtures;

use AppBundle\Entity\Film;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class FilmFixtures extends Fixture
{
    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {

        $films = [
            [
                'name' => 'Mechanic Résurrection',
                'description' => 'Arthur Bishop pense avoir définitivement tourné la page sur son passé de tueur à gages. Il coule maintenant des jours heureux dans l’anonymat. Mais lorsque son plus redoutable ennemi enlève sa petite amie, il est obligé de parcourir le monde pour accomplir une liste d’assassinats impossibles. Et comme toujours, il doit faire en sorte que ses exécutions ressemblent à des accidents. Une course contre la montre sans relâche s’engage.',
                'date' => new \DateTime('2017-01-01'),
                'fixtureImage' => 'mechanic2.jpg',
                'fixtureVideo' => 'mechanic.mp4',
                'actor' => 'Jason Statham',
                'note' => '10',
                'category_id' => $this->getReference('category1') ,
            ],
            [
                'name' => 'Parker',
                'description' => 'Parker est le plus audacieux et le plus redoutable des cambrioleurs. Spécialiste des casses réputés impossibles, il exige de ses partenaires une loyauté absolue et le respect scrupuleux du plan. Alors qu’une opération vient de mal tourner à cause d’une négligence, Parker décide qu’il ne travaillera plus jamais pour Melander et son gang. Mais le caïd n’accepte pas l’affront et ses hommes laissent Parker pour mort.',
                'date' => new \DateTime('2017-01-01'),
                'fixtureImage' => 'parker.jpg',
                'fixtureVideo' => 'parker.mp4',
                'actor' => 'Jason Statham',
                'note' => '9',
                'category_id' => $this->getReference('category1') ,
            ],
            [
                'name' => 'Safe',
                'description' => 'Un ancien agent secret sauve une petite fille à la mémoire exceptionnelle, déclenchant ainsi une guerre des gangs entre les Triades, la mafia russe et des policiers new-yorkais corrompus. Tous veulent mettre la main sur l\'enfant, la seule à détenir la combinaison d\'un coffre-fort très convoité.',
                'date' => new \DateTime('2017-01-01'),
                'fixtureImage' => 'safe.jpg',
                'fixtureVideo' => 'safe.mp4',
                'actor' => 'Jason Statham',
                'note' => '10',
                'category_id' => $this->getReference('category1') ,
            ],
        ];

        foreach ($films as $film) {

            $project = new Film();
            $project
                ->setName($film['name'])
                ->setDescription($film['description'])
                ->setDate($film['date'])
                ->setImage($film['fixtureImage'])
                ->setVideo($film['fixtureVideo'])
                ->setActor($film['actor'])
                ->setNote($film['note'])
                ->setCategory($film['category_id']);
            $manager->persist($project);
        }

        $manager->flush();
    }
}