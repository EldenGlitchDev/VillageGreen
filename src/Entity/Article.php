<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArticleRepository::class)]
class Article
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $typeArt = null;

    #[ORM\Column(length: 50)]
    private ?string $nomArt = null;

    #[ORM\Column(length: 50)]
    private ?string $accessoireArt = null;

    #[ORM\Column(length: 50)]
    private ?string $marqueArt = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $descrArt = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $photoArt = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $garantieArt = null;

    #[ORM\Column(nullable: true)]
    private ?int $promoArt = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 7, scale: 2)]
    private ?string $prixUnitHTVAArt = null;

    #[ORM\ManyToOne(inversedBy: 'articles')]
    private ?SousCategorie $sousCategorie = null;

    #[ORM\ManyToOne(inversedBy: 'articles')]
    private ?Fournisseur $fournisseur = null;

    /**
     * @var Collection<int, Commande>
     */
    #[ORM\OneToMany(targetEntity: Commande::class, mappedBy: 'article')]
    private Collection $commandes;

    public function __construct()
    {
        $this->commandes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeArt(): ?string
    {
        return $this->typeArt;
    }

    public function setTypeArt(string $typeArt): static
    {
        $this->typeArt = $typeArt;

        return $this;
    }

    public function getNomArt(): ?string
    {
        return $this->nomArt;
    }

    public function setNomArt(string $nomArt): static
    {
        $this->nomArt = $nomArt;

        return $this;
    }

    public function getAccessoireArt(): ?string
    {
        return $this->accessoireArt;
    }

    public function setAccessoireArt(string $accessoireArt): static
    {
        $this->accessoireArt = $accessoireArt;

        return $this;
    }

    public function getMarqueArt(): ?string
    {
        return $this->marqueArt;
    }

    public function setMarqueArt(string $marqueArt): static
    {
        $this->marqueArt = $marqueArt;

        return $this;
    }

    public function getDescrArt(): ?string
    {
        return $this->descrArt;
    }

    public function setDescrArt(?string $descrArt): static
    {
        $this->descrArt = $descrArt;

        return $this;
    }

    public function getPhotoArt(): ?string
    {
        return $this->photoArt;
    }

    public function setPhotoArt(?string $photoArt): static
    {
        $this->photoArt = $photoArt;

        return $this;
    }

    public function getGarantieArt(): ?string
    {
        return $this->garantieArt;
    }

    public function setGarantieArt(?string $garantieArt): static
    {
        $this->garantieArt = $garantieArt;

        return $this;
    }

    public function getPromoArt(): ?int
    {
        return $this->promoArt;
    }

    public function setPromoArt(?int $promoArt): static
    {
        $this->promoArt = $promoArt;

        return $this;
    }

    public function getPrixUnitHTVAArt(): ?string
    {
        return $this->prixUnitHTVAArt;
    }

    public function setPrixUnitHTVAArt(string $prixUnitHTVAArt): static
    {
        $this->prixUnitHTVAArt = $prixUnitHTVAArt;

        return $this;
    }

    public function getSousCategorie(): ?SousCategorie
    {
        return $this->sousCategorie;
    }

    public function setSousCategorie(?SousCategorie $sousCategorie): static
    {
        $this->sousCategorie = $sousCategorie;

        return $this;
    }

    public function getFournisseur(): ?Fournisseur
    {
        return $this->fournisseur;
    }

    public function setFournisseur(?Fournisseur $fournisseur): static
    {
        $this->fournisseur = $fournisseur;

        return $this;
    }

    /**
     * @return Collection<int, Commande>
     */
    public function getCommandes(): Collection
    {
        return $this->commandes;
    }

    public function addCommande(Commande $commande): static
    {
        if (!$this->commandes->contains($commande)) {
            $this->commandes->add($commande);
            $commande->setArticle($this);
        }

        return $this;
    }

    public function removeCommande(Commande $commande): static
    {
        if ($this->commandes->removeElement($commande)) {
            // set the owning side to null (unless already changed)
            if ($commande->getArticle() === $this) {
                $commande->setArticle(null);
            }
        }

        return $this;
    }
}
