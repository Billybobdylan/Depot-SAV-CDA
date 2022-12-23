<?php

namespace App\Entity;

use App\Repository\CommandRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommandRepository::class)]
class Command
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $datecommand = null;

    #[ORM\ManyToOne(inversedBy: 'command')]
    private ?Secompose $secompose = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDatecommand(): ?\DateTimeInterface
    {
        return $this->datecommand;
    }

    public function setDatecommand(\DateTimeInterface $datecommand): self
    {
        $this->datecommand = $datecommand;

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
