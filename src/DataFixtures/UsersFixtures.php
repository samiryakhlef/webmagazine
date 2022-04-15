<?php

namespace App\DataFixtures;

use App\Entity\Users;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UsersFixtures extends Fixture
{
    public function __construct(
        private UserPasswordHasherInterface $passwordEncoder
    ){}

    public function load(ObjectManager $manager): void
    {
        $faker = \Faker\Factory::create('fr_FR');

        for($usr = 0; $usr <= 10; $usr++)
        {
        $user = new Users();
        $user->setFirstname($faker->firstName);
        $user->setLastname($faker->lastName);
        $user->setUsername($faker->userName);
        $user->setEmail($faker->email);
        $user->setPassword(
            $this->passwordEncoder->HashPassword($user, 'password')
        );
        $user->setRoles(['ROLE_USER']);
        $manager->persist($user);
        }
        $manager->flush();
    }
}
