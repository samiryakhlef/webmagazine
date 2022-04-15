<?php

namespace App\DataFixtures;

use App\Entity\Authors;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AuthorsFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $authors = new Authors();
        
        $manager->persist($authors);
        $manager->flush();
    }
}
