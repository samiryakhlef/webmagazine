<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    // constructeur pour récupérer la méthode UserPawwordHasherInterface
    public function __construct(
        private UserPasswordHasherInterface $passwordEncoder,
    ){}


    public function load(ObjectManager $manager): void
    {
        // j'instancie Faker
        $faker = \Faker\Factory::create('fr_FR');

        // je crée 10 utilisateurs
        for ($i = 0; $i < 10; $i++) {
            $user = new User();
            $user->setEmail($faker->email)
                ->setRoles(['ROLE_USER'])
                ->setPrenom($faker->firstName)
                ->setNom($faker->lastName)
                ->setPseudo($faker->userName)
                ->setSocial($faker->url)
                ->setContribution($faker->numberBetween(0, 100))
                ->setAPropos($faker->text);

        //cryptage du mot de passe
            $user->setPassword($this->passwordEncoder->hashPassword($user, 'password'));

        // je persiste les fausses données 
            $manager->persist($user);
}
        // je flush les données (envoi dans la BDD)
            $manager->flush();
    }
}
