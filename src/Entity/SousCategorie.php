<?php

namespace App\Entity;

use App\Repository\SousCategorieRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SousCategorieRepository::class)]
class SousCategorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $nomSousCat = null;

    #[ORM\Column(length: 250, nullable: true)]
    private ?string $imageSousCat = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomSousCat(): ?string
    {
        return $this->nomSousCat;
    }

    public function setNomSousCat(string $nomSousCat): static
    {
        $this->nomSousCat = $nomSousCat;

        return $this;
    }

    public function getImageSousCat(): ?string
    {
        return $this->imageSousCat;
    }

    public function setImageSousCat(?string $imageSousCat): static
    {
        $this->imageSousCat = $imageSousCat;

        return $this;
    }
}
