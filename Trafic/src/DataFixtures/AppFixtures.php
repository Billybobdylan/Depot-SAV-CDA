<?php

namespace App\DataFixtures;

use App\Entity\Mesure;
use App\Entity\Module;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $mod1 = new Module();

        $mod1->setNom("Caméra 1");
        $mod1->setType_module("Caméra de surveillance");
        $mod1->setAdresseip("1111111");
        $mod1->setétat("fonctionnel");
        $mod1->setphoto("Cam1.jpg");

        $manager->persist($mod1);

      


        $manager->flush();
    }
}
