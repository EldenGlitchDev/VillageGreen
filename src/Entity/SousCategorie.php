<?php

namespace App\Entity;

use App\Repository\SousCategorieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SousCategorieRepository::class)]
class SousCategorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $NomSousCat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ImageSousCat = null;

    /**
     * @var Collection<int, Categorie>
     */
    #[ORM\OneToMany(targetEntity: Categorie::class, mappedBy: 'sousCategorie')]
    private Collection $categorie;

    public function __construct()
    {
        $this->categorie = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomSousCat(): ?string
    {
        return $this->NomSousCat;
    }

    public function setNomSousCat(string $NomSousCat): static
    {
        $this->NomSousCat = $NomSousCat;

        return $this;
    }

    public function getImageSousCat(): ?string
    {
        return $this->ImageSousCat;
    }

    public function setImageSousCat(?string $ImageSousCat): static
    {
        $this->ImageSousCat = $ImageSousCat;

        return $this;
    }

    /**
     * @return Collection<int, Categorie>
     */
    public function getCategorie(): Collection
    {
        return $this->categorie;
    }

    public function addCategorie(Categorie $categorie): static
    {
        if (!$this->categorie->contains($categorie)) {
            $this->categorie->add($categorie);
            $categorie->setSousCategorie($this);
        }

        return $this;
    }

    public function removeCategorie(Categorie $categorie): static
    {
        if ($this->categorie->removeElement($categorie)) {
            // set the owning side to null (unless already changed)
            if ($categorie->getSousCategorie() === $this) {
                $categorie->setSousCategorie(null);
            }
        }

        return $this;
    }
}
