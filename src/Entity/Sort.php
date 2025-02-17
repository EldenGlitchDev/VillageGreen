<?php

namespace App\Entity;

use App\Repository\SortRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SortRepository::class)]
class Sort
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $idArt = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $NoFactBon = null;

    #[ORM\Column(nullable: true)]
    private ?int $quantiteBonLivraison = null;

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

    public function getNoFactBon(): ?string
    {
        return $this->NoFactBon;
    }

    public function setNoFactBon(?string $NoFactBon): static
    {
        $this->NoFactBon = $NoFactBon;

        return $this;
    }

    public function getQuantiteBonLivraison(): ?int
    {
        return $this->quantiteBonLivraison;
    }

    public function setQuantiteBonLivraison(?int $quantiteBonLivraison): static
    {
        $this->quantiteBonLivraison = $quantiteBonLivraison;

        return $this;
    }
}
