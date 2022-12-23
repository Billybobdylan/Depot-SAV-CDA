<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProduitRepository::class)]
class Produit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $libelle = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $prix = null;

    #[ORM\Column(length: 255)]
    private ?string $image = null;

    #[ORM\ManyToOne(inversedBy: 'produit')]
    private ?Souscat $souscat = null;

    #[ORM\OneToMany(mappedBy: 'produit', targetEntity: Detail::class)]
    private Collection $detail;

    #[ORM\ManyToOne(inversedBy: 'produit')]
    private ?Secompose $secompose = null;

    public function __construct()
    {
        $this->detail = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(string $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getSouscat(): ?Souscat
    {
        return $this->souscat;
    }

    public function setSouscat(?Souscat $souscat): self
    {
        $this->souscat = $souscat;

        return $this;
    }

    /**
     * @return Collection<int, Detail>
     */
    public function getDetail(): Collection
    {
        return $this->detail;
    }

    public function addDetail(Detail $detail): self
    {
        if (!$this->detail->contains($detail)) {
            $this->detail->add($detail);
            $detail->setProduit($this);
        }

        return $this;
    }

    public function removeDetail(Detail $detail): self
    {
        if ($this->detail->removeElement($detail)) {
            // set the owning side to null (unless already changed)
            if ($detail->getProduit() === $this) {
                $detail->setProduit(null);
            }
        }

        return $this;
    }

    public function getSecompose(): ?Secompose
    {
        return $this->secompose;
    }

    public function setSecompose(?Secompose $secompose): self
    {
        $this->secompose = $secompose;

        return $this;
    }
}
