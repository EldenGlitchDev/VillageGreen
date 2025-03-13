<?php

namespace App\Entity;

use App\Repository\ContenirRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContenirRepository::class)]
class Contenir
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $prixArt = null;

    #[ORM\Column]
    private ?int $quStockArt = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrixArt(): ?int
    {
        return $this->prixArt;
    }

    public function setPrixArt(int $prixArt): static
    {
        $this->prixArt = $prixArt;

        return $this;
    }

    public function getQuStockArt(): ?int
    {
        return $this->quStockArt;
    }

    public function setQuStockArt(int $quStockArt): static
    {
        $this->quStockArt = $quStockArt;

        return $this;
    }
}
