<?php

namespace App\DataFixtures;


use App\Entity\Videos;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class VideosFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = \Faker\Factory::create('fr_FR');

        for ($vid = 0; $vid <= 10; $vid++) 
        {
            $video = new Videos();
            $video->setName($faker->mimeType);
            $manager->persist($video);
        }
        $manager->flush();
    }
}
