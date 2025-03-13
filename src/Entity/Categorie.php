<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $imageCat = null;

    /**
     * @var Collection<int, SousCategorie>
     */
    #[ORM\OneToMany(targetEntity: SousCategorie::class, mappedBy: 'categorie')]
    private Collection $souscategorie;

    public function __construct()
    {
        $this->souscategorie = new ArrayCollection();
    }

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

    /**
     * @return Collection<int, SousCategorie>
     */
    public function getSouscategorie(): Collection
    {
        return $this->souscategorie;
    }

    public function addSouscategorie(SousCategorie $souscategorie): static
    {
        if (!$this->souscategorie->contains($souscategorie)) {
            $this->souscategorie->add($souscategorie);
            $souscategorie->setCategorie($this);
        }

        return $this;
    }

    public function removeSouscategorie(SousCategorie $souscategorie): static
    {
        if ($this->souscategorie->removeElement($souscategorie)) {
            // set the owning side to null (unless already changed)
            if ($souscategorie->getCategorie() === $this) {
                $souscategorie->setCategorie(null);
            }
        }

        return $this;
    }
}
