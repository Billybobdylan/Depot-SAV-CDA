<?php

namespace App\DataFixtures;

use App\Entity\Module;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $mod1 = new Module();

        $mod1->setNom("Caméra 1");
        $mod1->setTypemodule("Caméra de surveillance");
        $mod1->setAdresseip("1111111");
        $mod1->setetat(true);
        $mod1->setphoto("Cam1.jpg");
        $mod1->setNomvaleur("Véhicule observé");
        $mod1->setValeur(200);
        $mod1->setDatemesure("12/05/2020");
        
        $manager->persist($mod1);


        $manager->flush();
    }
}
