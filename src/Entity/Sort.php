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
    private ?string $IDBon_de_livraison = null;

    #[ORM\Column(nullable: true)]
    private ?int $quantite_bon_livraison = null;

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

    public function getIDBonDeLivraison(): ?string
    {
        return $this->IDBon_de_livraison;
    }

    public function setIDBonDeLivraison(?string $IDBon_de_livraison): static
    {
        $this->IDBon_de_livraison = $IDBon_de_livraison;

        return $this;
    }

    public function getQuantiteBonLivraison(): ?int
    {
        return $this->quantite_bon_livraison;
    }

    public function setQuantiteBonLivraison(?int $quantite_bon_livraison): static
    {
        $this->quantite_bon_livraison = $quantite_bon_livraison;

        return $this;
    }
}
