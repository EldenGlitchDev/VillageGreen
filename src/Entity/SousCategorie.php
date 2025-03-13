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
    private ?string $nomSousCat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $imageSousCat = null;

    #[ORM\ManyToOne(inversedBy: 'souscategorie')]
    private ?Categorie $categorie = null;

    /**
     * @var Collection<int, Article>
     */
    #[ORM\OneToMany(targetEntity: Article::class, mappedBy: 'sousCategorie')]
    private Collection $articles;

    public function __construct()
    {
        $this->articles = new ArrayCollection();
    }

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

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): static
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * @return Collection<int, Article>
     */
    public function getArticles(): Collection
    {
        return $this->articles;
    }

    public function addArticle(Article $article): static
    {
        if (!$this->articles->contains($article)) {
            $this->articles->add($article);
            $article->setSousCategorie($this);
        }

        return $this;
    }

    public function removeArticle(Article $article): static
    {
        if ($this->articles->removeElement($article)) {
            // set the owning side to null (unless already changed)
            if ($article->getSousCategorie() === $this) {
                $article->setSousCategorie(null);
            }
        }

        return $this;
    }
}
