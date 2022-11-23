<?php

namespace App\DataFixtures;

use App\Entity\MicroPost;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $mp1 = new MicroPost();
        $mp1->setTitle('Welcome to Germany!');
        $mp1->setText('Germany is a great place!');
        $mp1->setCreated(new DateTime());
        $manager->persist($mp1);
        
        $mp2 = new MicroPost();
        $mp2->setTitle('Welcome to Germany 2!');
        $mp2->setText('Germany is a great place 2!');
        $mp2->setCreated(new DateTime());
        $manager->persist($mp2);

        $mp3 = new MicroPost();
        $mp3->setTitle('Welcome to Germany 3!');
        $mp3->setText('Germany is a great place 3!');
        $mp3->setCreated(new DateTime());
        $manager->persist($mp3);

        $manager->flush();
    }
}
