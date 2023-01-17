<?php

namespace App\Entity;

use App\Repository\ModuleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ModuleRepository::class)]
class Module
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    

    #[ORM\Column(length: 255)]
    private ?string $adresseip = null;


    #[ORM\Column(length: 255)]
    private ?string $photo = null;

    #[ORM\Column]
    private ?bool $etat = null;

    #[ORM\Column(length: 255)]
    private ?string $typeModule = null;

    #[ORM\Column(length: 255)]
    private ?string $nomvaleur = null;

    #[ORM\Column]
    private ?int $valeur = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nomvaleur2 = null;

    #[ORM\Column(nullable: true)]
    private ?int $valeur2 = null;

    #[ORM\Column(length: 255)]
    private ?string $datemesure = null;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    

    public function getAdresseip(): ?string
    {
        return $this->adresseip;
    }

    public function setAdresseip(string $adresseip): self
    {
        $this->adresseip = $adresseip;

        return $this;
    }



    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function isEtat(): ?bool
    {
        return $this->etat;
    }

    public function setEtat(bool $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getTypeModule(): ?string
    {
        return $this->typeModule;
    }

    public function setTypeModule(string $typeModule): self
    {
        $this->typeModule = $typeModule;

        return $this;
    }


    public function getNomvaleur(): ?string
    {
        return $this->nomvaleur;
    }

    public function setNomvaleur(string $nomvaleur): self
    {
        $this->nomvaleur = $nomvaleur;

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

    public function getNomvaleur2(): ?string
    {
        return $this->nomvaleur2;
    }

    public function setNomvaleur2(?string $nomvaleur2): self
    {
        $this->nomvaleur2 = $nomvaleur2;

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

    public function getDatemesure(): ?string
    {
        return $this->datemesure;
    }

    public function setDatemesure(string $datemesure): self
    {
        $this->datemesure = $datemesure;

        return $this;
    }

}
