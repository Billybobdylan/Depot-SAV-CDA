<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategorieRepository::class)]
class Categorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\OneToMany(mappedBy: 'categorie', targetEntity: Souscat::class)]
    private Collection $souscat;

    public function __construct()
    {
        $this->souscat = new ArrayCollection();
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

    /**
     * @return Collection<int, Souscat>
     */
    public function getSouscat(): Collection
    {
        return $this->souscat;
    }

    public function addSouscat(Souscat $souscat): self
    {
        if (!$this->souscat->contains($souscat)) {
            $this->souscat->add($souscat);
            $souscat->setCategorie($this);
        }

        return $this;
    }

    public function removeSouscat(Souscat $souscat): self
    {
        if ($this->souscat->removeElement($souscat)) {
            // set the owning side to null (unless already changed)
            if ($souscat->getCategorie() === $this) {
                $souscat->setCategorie(null);
            }
        }

        return $this;
    }
}
