<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\String\Slugger\SluggerInterface;

class CategoryFixtures extends Fixture
{
    public function __construct(private SluggerInterface $slugger)
    {
    }



    public function load(ObjectManager $manager): void
    {
        $parent = $this->createCategory('A la une', null, $manager);
        $this->createCategory('Sport', $parent, $manager);
        $this->createCategory('Politique', $parent, $manager);
        $this->createCategory('Economie', $parent, $manager);
        $this->createCategory('International', $parent, $manager);

        $parent = $this->createCategory('Dossier', $parent, $manager);
        $this->createCategory('Politique', $parent, $manager);
        $this->createCategory('Economie', $parent, $manager);
        $this->createCategory('International', $parent, $manager);

        $parent = $this->createCategory('Voyage', $parent, $manager);
        $this->createCategory('Politique', $parent, $manager);
        $this->createCategory('Economie', $parent, $manager);
        $this->createCategory('International', $parent, $manager);

        $parent = $this->createCategory('A coté de chez vous', $parent, $manager);
        $this->createCategory('Politique', $parent, $manager);
        $this->createCategory('Economie', $parent, $manager);
        $this->createCategory('International', $parent, $manager);

        $parent = $this->createCategory('Video', $parent, $manager);
        $this->createCategory('Politique', $parent, $manager);
        $this->createCategory('Economie', $parent, $manager);
        $this->createCategory('International', $parent, $manager);

        $parent = $this->createCategory('Portrait', $parent, $manager);
        $this->createCategory('Politique', $parent, $manager);
        $this->createCategory('Economie', $parent, $manager);
        $this->createCategory('International', $parent, $manager);

        $parent = $this->createCategory('Initiative', $parent, $manager);
        $this->createCategory('Politique', $parent, $manager);
        $this->createCategory('Economie', $parent, $manager);
        $this->createCategory('International', $parent, $manager);

        $parent = $this->createCategory('Bien-être', $parent, $manager);
        $this->createCategory('Politique', $parent, $manager);
        $this->createCategory('Economie', $parent, $manager);
        $this->createCategory('International', $parent, $manager);


        $manager->flush();
    }

    // fonction de création de catégorie
    public function createCategory(
        string $name,
        Category $parent = null,
        ObjectManager $manager
    ) {
        $category = new Category();
        $category->setName($name);
        $category->setSlug($this->slugger->slug($category->getName())->lower());
        $manager->persist($category);

        return $category;
    }
}