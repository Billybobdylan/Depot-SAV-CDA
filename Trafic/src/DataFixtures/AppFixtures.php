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
        $mod1->setTypemodule("Caméra de surveillance");
        $mod1->setAdresseip("1111111");
        $mod1->setetat(true);
        $mod1->setphoto("Cam1.jpg");

        $manager->persist($mod1);

        
        $mes1 = new Mesure();

        $mes1->setNomvaleur("Véhicule observé");
        $mes1->setValeur(200);
        $mes1->setDatemesure("12/05/2020");
        

        $manager->persist($mes1);

        $mod1->addMesure($mes1);

        $manager->flush();
    }
}
