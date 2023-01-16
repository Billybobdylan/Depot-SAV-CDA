<?php

namespace App\Entity;

use App\Repository\MesureRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MesureRepository::class)]
class Mesure
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_valeur = null;

    #[ORM\Column]
    private ?int $valeur = null;

   
    #[ORM\ManyToOne(inversedBy: 'mesures')]
    private ?module $module = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nom_valeur2 = null;

    #[ORM\Column(nullable: true)]
    private ?int $valeur2 = null;

    #[ORM\Column(length: 255)]
    private ?string $date_mesure = null;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomValeur(): ?string
    {
        return $this->nom_valeur;
    }

    public function setNomValeur(string $nom_valeur): self
    {
        $this->nom_valeur = $nom_valeur;

        return $this;
    }

    public function getValeur(): ?int
    {
        return $this->valeur;
    }

    public function setValeur(int $valeur): self
    {
        $this->valeur = $valeur;

        return $this;
    }


    public function getModule(): ?module
    {
        return $this->module;
    }

    public function setModule(?module $module): self
    {
        $this->module = $module;

        return $this;
    }

    public function getNomValeur2(): ?string
    {
        return $this->nom_valeur2;
    }

    public function setNomValeur2(?string $nom_valeur2): self
    {
        $this->nom_valeur2 = $nom_valeur2;

        return $this;
    }

    public function getValeur2(): ?int
    {
        return $this->valeur2;
    }

    public function setValeur2(?int $valeur2): self
    {
        $this->valeur2 = $valeur2;

        return $this;
    }

    public function getDateMesure(): ?string
    {
        return $this->date_mesure;
    }

    public function setDateMesure(string $date_mesure): self
    {
        $this->date_mesure = $date_mesure;

        return $this;
    }


}
