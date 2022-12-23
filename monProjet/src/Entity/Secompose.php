<?php

namespace App\Entity;

use App\Repository\SecomposeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SecomposeRepository::class)]
class Secompose
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $quantite = null;

    #[ORM\OneToMany(mappedBy: 'secompose', targetEntity: Produit::class)]
    private Collection $produit;

    #[ORM\OneToMany(mappedBy: 'secompose', targetEntity: Command::class)]
    private Collection $command;

    public function __construct()
    {
        $this->produit = new ArrayCollection();
        $this->command = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * @return Collection<int, Produit>
     */
    public function getProduit(): Collection
    {
        return $this->produit;
    }

    public function addProduit(Produit $produit): self
    {
        if (!$this->produit->contains($produit)) {
            $this->produit->add($produit);
            $produit->setSecompose($this);
        }

        return $this;
    }

    public function removeProduit(Produit $produit): self
    {
        if ($this->produit->removeElement($produit)) {
            // set the owning side to null (unless already changed)
            if ($produit->getSecompose() === $this) {
                $produit->setSecompose(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Command>
     */
    public function getCommand(): Collection
    {
        return $this->command;
    }

    public function addCommand(Command $command): self
    {
        if (!$this->command->contains($command)) {
            $this->command->add($command);
            $command->setSecompose($this);
        }

        return $this;
    }

    public function removeCommand(Command $command): self
    {
        if ($this->command->removeElement($command)) {
            // set the owning side to null (unless already changed)
            if ($command->getSecompose() === $this) {
                $command->setSecompose(null);
            }
        }

        return $this;
    }
}
