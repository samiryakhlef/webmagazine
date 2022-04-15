<?php

namespace App\DataFixtures;

use App\Entity\Authors;
use DateTimeImmutable;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AuthorsFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = \Faker\Factory::create('fr_FR');
        $date = new \DateTime("2014-06-20 11:45 Europe/London");
        $immutable = DateTimeImmutable::createFromMutable($date);

        for($auth = 0; $auth <= 10; $auth++){
        $authors = new Authors();
        $authors->setFisrtname($faker->firstName);
        $authors->setLastname($faker->lastName);
        $authors->setCreatedAt(DateTimeImmutable::createFromMutable($faker->dateTime('d_m_Y H:i:s')));
        $authors->setContribution($faker->numberBetween(0, 100));
        $manager->persist($authors);
    }
        $manager->flush();
    }
}
