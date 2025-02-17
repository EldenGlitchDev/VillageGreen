<?php

namespace App\Entity;

use App\Repository\ARepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ARepository::class)]
class A
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $idUtil = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $idPromo = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdUtil(): ?string
    {
        return $this->idUtil;
    }

    public function setIdUtil(?string $idUtil): static
    {
        $this->idUtil = $idUtil;

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
