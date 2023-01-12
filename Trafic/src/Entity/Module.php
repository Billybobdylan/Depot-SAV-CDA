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
    private ?string $type_module = null;

    #[ORM\Column(length: 255)]
    private ?string $adresseip = null;

    #[ORM\Column(length: 255)]
    private ?string $état = null;

    #[ORM\OneToMany(mappedBy: 'module', targetEntity: Mesure::class)]
    private Collection $mesures;

    #[ORM\Column(length: 255)]
    private ?string $photo = null;


    public function __construct()
    {
        $this->mesures = new ArrayCollection();
    }

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

    public function getType_module(): ?string
    {
        return $this->type_module;
    }

    public function setType_module(string $type_module): self
    {
        $this->type_module = $type_module;

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

    public function getétat(): ?string
    {
        return $this->état;
    }

    public function setétat(string $état): self
    {
        $this->état = $état;

        return $this;
    }

    /**
     * @return Collection<int, Mesure>
     */
    public function getMesures(): Collection
    {
        return $this->mesures;
    }

    public function addMesure(Mesure $mesure): self
    {
        if (!$this->mesures->contains($mesure)) {
            $this->mesures->add($mesure);
            $mesure->setModule($this);
        }

        return $this;
    }

    public function removeMesure(Mesure $mesure): self
    {
        if ($this->mesures->removeElement($mesure)) {
            // set the owning side to null (unless already changed)
            if ($mesure->getModule() === $this) {
                $mesure->setModule(null);
            }
        }

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

}
