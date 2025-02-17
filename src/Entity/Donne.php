<?php

namespace App\Entity;

use App\Repository\DonneRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DonneRepository::class)]
class Donne
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $idArt = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $idAvis = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdArt(): ?string
    {
        return $this->idArt;
    }

    public function setIdArt(?string $idArt): static
    {
        $this->idArt = $idArt;

        return $this;
    }

    public function getIdAvis(): ?string
    {
        return $this->idAvis;
    }

    public function setIdAvis(?string $idAvis): static
    {
        $this->idAvis = $idAvis;

        return $this;
    }
}
