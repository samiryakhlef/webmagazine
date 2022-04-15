<?php

namespace App\DataFixtures;

use App\Entity\Images;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ImagesFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = \Faker\Factory::create('fr_FR');

        for($img = 0; $img <= 10; $img++){
        $image = new Images();
        $image->setName($faker->imageUrl());
        $manager->persist($image);
    }
        
        $manager->flush();
    }
}
