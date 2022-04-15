<?php

namespace App\DataFixtures;

use App\Entity\Articles;
use DateTimeImmutable;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\String\Slugger\SluggerInterface;

class ArticlesFixtures extends Fixture
{
    public function __construct(private SluggerInterface $slugger)
    {
    }

    public function load(ObjectManager $manager): void
    {
        $faker = \Faker\Factory::create('fr_FR');
        $date = new \DateTime("2014-06-20 11:45 Europe/London");
        $immutable = DateTimeImmutable::createFromMutable($date);

        for ($art = 0; $art <= 10; $art++)
        {
            $article = new Articles();
            $article->setTitle($faker->title());
            $article->setContent($faker->paragraph());
            $article->setCreatedAt(DateTimeImmutable::createFromMutable($faker->dateTime('d_m_Y H:i:s')));
            $article->setSlug($faker->slug());
            $manager->persist($article);
        }
        $manager->flush();
    }
}