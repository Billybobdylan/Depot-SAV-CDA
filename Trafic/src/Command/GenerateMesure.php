<?php

// src/Command/CreateUserCommand.php
namespace App\Command;

use DateTime;
use Faker\Factory;
use App\Entity\Mesure;
use App\Repository\MesureRepository;
use App\Repository\ModuleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GenerateMesure extends Command
{
    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'mesure:generate';

    private $em;
    private $repo_module;
    private $repo_mesure;

    public function __construct(EntityManagerInterface $em, MesureRepository $mes_repo, ModuleRepository $mod_repo) {

        $this->em = $em;
        $this->repo_module = $mod_repo;
        $this->repo_mesure = $mes_repo;

        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        echo "generate mesure ...\n";

        $faker = Factory::create();

        $mod1 = $this->repo_module->find(1);

        $mes1 = new Mesure();
        $mes1->setEtat(true);
        $mes1->setNom("temperature");
        $mes1->setValeur($faker->numberBetween(-10, 40));
        $mes1->setDate(new DateTime());
        $mes1->setModule($mod1);


        $this->em->persist($mes1);

        $this->em->flush();

        return Command::SUCCESS;

        // or return this if some error happened during the execution
        // (it's equivalent to returning int(1))
        // return Command::FAILURE;

        // or return this to indicate incorrect command usage; e.g. invalid options
        // or missing arguments (it's equivalent to returning int(2))
        // return Command::INVALID
    }
}