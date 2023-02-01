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


        $mod2 = new Module();

        $mod2->setNom("Module vitesse");
        $mod2->setTypemodule("Radar");
        $mod2->setAdresseip("254689");
        $mod2->setEtat(true);
        $mod2->setphoto("Cam2.jpg");
        
        $mes2 = new Mesure();
        $mes2->setEtat(true);
        $mes2->setNom("Vitesse moyenne");
        $mes2->setValeur($faker->numberBetween(10, 150));
        $mes2->setDate(new DateTime());
        $mes2->setModule($mod2);

        $mes2 = new Mesure();
        $mes2->setEtat(true);
        $mes2->setNom("Vitesse moyenne");
        $mes2->setValeur($faker->numberBetween(10, 150));
        $mes2->setDate(new DateTime());
        $mes2->setModule($mod2);


        $mod3 = new Module();

        $mod3->setNom("Module comptage");
        $mod3->setTypemodule("Caméra ANPR");
        $mod3->setAdresseip("165478");
        $mod3->setEtat(true);
        $mod3->setphoto("Cam4.jpg");
        
        $mes3 = new Mesure();
        $mes3->setEtat(true);
        $mes3->setNom("Véhicules observé");
        $mes3->setValeur($faker->numberBetween(10, 150));
        $mes3->setDate(new DateTime());
        $mes3->setModule($mod3);

        $mes3 = new Mesure();
        $mes3->setEtat(true);
        $mes3->setNom("Véhicule observé");
        $mes3->setValeur($faker->numberBetween(10, 150));
        $mes3->setDate(new DateTime());
        $mes3->setModule($mod3);

       
        
        $manager->persist($mod1);
        $manager->persist($mes1);
        $manager->persist($mod2);
        $manager->persist($mes2);
        $manager->persist($mod3);
        $manager->persist($mes3);


        $manager->flush();
    }
}
