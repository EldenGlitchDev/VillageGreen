<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategorieRepository::class)]
class Categorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $nomCat = null;

    #[ORM\Column(length: 250, nullable: true)]
    private ?string $imageCat = null;

    #[ORM\Column(length: 50)]
    private ?string $idSousCat = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomCat(): ?string
    {
        return $this->nomCat;
    }

    public function setNomCat(string $nomCat): static
    {
        $this->nomCat = $nomCat;

        return $this;
    }

    public function getImageCat(): ?string
    {
        return $this->imageCat;
    }

    public function setImageCat(?string $imageCat): static
    {
        $this->imageCat = $imageCat;

        return $this;
    }

    public function getIdSousCat(): ?string
    {
        return $this->idSousCat;
    }

    public function setIdSousCat(string $idSousCat): static
    {
        $this->idSousCat = $idSousCat;

        return $this;
    }
}
