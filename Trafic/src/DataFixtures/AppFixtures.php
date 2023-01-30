<?php

namespace App\DataFixtures;

use DateTime;
use Faker\Factory;
use App\Entity\Mesure;
use App\Entity\Module;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();

        $mod1 = new Module();

        $mod1->setNom("Module température");
        $mod1->setTypemodule("Thermomètre exterieur");
        $mod1->setAdresseip("1111111");
        $mod1->setEtat(true);
        $mod1->setphoto("Cam1.jpg");
        
        $mes1 = new Mesure();
        $mes1->setEtat(true);
        $mes1->setNom("temperature");
        $mes1->setValeur($faker->numberBetween(-10, 40));
        $mes1->setDate(new DateTime());
        $mes1->setModule($mod1);

        $mes1 = new Mesure();
        $mes1->setEtat(true);
        $mes1->setNom("temperature");
        $mes1->setValeur($faker->numberBetween(-10, 40));
        $mes1->setDate(new DateTime());
        $mes1->setModule($mod1);

        // $mod2 = new Module();

        // $mod2->setNom("Caméra 1");
        // $mod2->setTypemodule("Caméra de surveillance");
        // $mod2->setAdresseip("1111111");
        // $mod2->setphoto("Cam1.jpg");
        
        // $mod2->setetat(true);
        // $mod2->setNomvaleur("Véhicule observé");
        // $mod2->setValeur($faker->numberBetween(0, 400));
        // $mod2->setDatemesure("12/05/2020");
        
        $manager->persist($mod1);
        $manager->persist($mes1);


        $manager->flush();
    }
}
