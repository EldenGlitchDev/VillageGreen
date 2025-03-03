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

    #[ORM\Column(type: Types::DECIMAL, precision: 7, scale: 2)]
    private ?string $prixArt = null;

    #[ORM\Column(length: 50)]
    private ?string $marqueArt = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $descrArt = null;

    #[ORM\Column]
    private ?int $quStockArt = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $photoArt = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $garantieArt = null;

    #[ORM\Column(nullable: true)]
    private ?int $promoArt = null;

    #[ORM\Column(length: 50)]
    private ?string $idFourni = null;

    #[ORM\Column(length: 50)]
    private ?string $idCat = null;

    /**
     * @var Collection<int, Categorie>
     */
    #[ORM\ManyToMany(targetEntity: Categorie::class, mappedBy: 'article')]
    private Collection $categories;

    #[ORM\ManyToOne(inversedBy: 'article')]
    private ?Fournisseur $fournisseur = null;

    /**
     * @var Collection<int, BonDeLivraison>
     */
    #[ORM\ManyToMany(targetEntity: BonDeLivraison::class, mappedBy: 'article')]
    private Collection $bonDeLivraisons;

    /**
     * @var Collection<int, Commande>
     */
    #[ORM\ManyToMany(targetEntity: Commande::class, inversedBy: 'articles')]
    private Collection $commande;

    /**
     * @var Collection<int, Avis>
     */
    #[ORM\ManyToMany(targetEntity: Avis::class, inversedBy: 'articles')]
    private Collection $avis;

    public function __construct()
    {
        $this->categories = new ArrayCollection();
        $this->bonDeLivraisons = new ArrayCollection();
        $this->commande = new ArrayCollection();
        $this->avis = new ArrayCollection();
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

    public function getPrixArt(): ?string
    {
        return $this->prixArt;
    }

    public function setPrixArt(string $prixArt): static
    {
        $this->prixArt = $prixArt;

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

    public function getQuStockArt(): ?int
    {
        return $this->quStockArt;
    }

    public function setQuStockArt(int $quStockArt): static
    {
        $this->quStockArt = $quStockArt;

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

    public function getIdFourni(): ?string
    {
        return $this->idFourni;
    }

    public function setIdFourni(string $idFourni): static
    {
        $this->idFourni = $idFourni;

        return $this;
    }

    public function getIdCat(): ?string
    {
        return $this->idCat;
    }

    public function setIdCat(string $idCat): static
    {
        $this->idCat = $idCat;

        return $this;
    }

    /**
     * @return Collection<int, Categorie>
     */
    public function getCategories(): Collection
    {
        return $this->categories;
    }

    public function addCategory(Categorie $category): static
    {
        if (!$this->categories->contains($category)) {
            $this->categories->add($category);
            $category->addArticle($this);
        }

        return $this;
    }

    public function removeCategory(Categorie $category): static
    {
        if ($this->categories->removeElement($category)) {
            $category->removeArticle($this);
        }

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
     * @return Collection<int, BonDeLivraison>
     */
    public function getBonDeLivraisons(): Collection
    {
        return $this->bonDeLivraisons;
    }

    public function addBonDeLivraison(BonDeLivraison $bonDeLivraison): static
    {
        if (!$this->bonDeLivraisons->contains($bonDeLivraison)) {
            $this->bonDeLivraisons->add($bonDeLivraison);
            $bonDeLivraison->addArticle($this);
        }

        return $this;
    }

    public function removeBonDeLivraison(BonDeLivraison $bonDeLivraison): static
    {
        if ($this->bonDeLivraisons->removeElement($bonDeLivraison)) {
            $bonDeLivraison->removeArticle($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Commande>
     */
    public function getCommande(): Collection
    {
        return $this->commande;
    }

    public function addCommande(Commande $commande): static
    {
        if (!$this->commande->contains($commande)) {
            $this->commande->add($commande);
        }

        return $this;
    }

    public function removeCommande(Commande $commande): static
    {
        $this->commande->removeElement($commande);

        return $this;
    }

    /**
     * @return Collection<int, Avis>
     */
    public function getAvis(): Collection
    {
        return $this->avis;
    }

    public function addAvi(Avis $avi): static
    {
        if (!$this->avis->contains($avi)) {
            $this->avis->add($avi);
        }

        return $this;
    }

    public function removeAvi(Avis $avi): static
    {
        $this->avis->removeElement($avi);

        return $this;
    }
}
