<?php

namespace App\DataFixtures;

use App\Entity\Notifications;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class NotificationsFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for($notif = 0; $notif <=10; $notif++)
        {
        $faker = \Faker\Factory::create('fr_FR');
        $notification = new Notifications();
        $notification->setStatus($faker->word());
        $manager->persist($notification);
        }
        
        $manager->flush();
    }
}
