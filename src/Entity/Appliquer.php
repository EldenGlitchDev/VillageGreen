<?php

namespace App\Entity;

use App\Repository\AppliquerRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AppliquerRepository::class)]
class Appliquer
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $idComm = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $idPromo = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdComm(): ?string
    {
        return $this->idComm;
    }

    public function setIdComm(?string $idComm): static
    {
        $this->idComm = $idComm;

        return $this;
    }

    public function getIdPromo(): ?string
    {
        return $this->idPromo;
    }

    public function setIdPromo(?string $idPromo): static
    {
        $this->idPromo = $idPromo;

        return $this;
    }
}
