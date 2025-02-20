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

    #[ORM\ManyToOne(inversedBy: 'article')]
    private ?Fournisseur $fournisseur = null;

    #[ORM\ManyToOne(inversedBy: 'article')]
    private ?Categorie $categorie = null;

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

    /**
     * @var Collection<int, BonDeLivraison>
     */
    #[ORM\ManyToMany(targetEntity: BonDeLivraison::class, inversedBy: 'articles')]
    private Collection $bon_de_livraison;

    public function __construct()
    {
        $this->commande = new ArrayCollection();
        $this->avis = new ArrayCollection();
        $this->bon_de_livraison = new ArrayCollection();
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

    public function getFournisseur(): ?Fournisseur
    {
        return $this->fournisseur;
    }

    public function setFournisseur(?Fournisseur $fournisseur): static
    {
        $this->fournisseur = $fournisseur;

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

    /**
     * @return Collection<int, BonDeLivraison>
     */
    public function getBonDeLivraison(): Collection
    {
        return $this->bon_de_livraison;
    }

    public function addBonDeLivraison(BonDeLivraison $bonDeLivraison): static
    {
        if (!$this->bon_de_livraison->contains($bonDeLivraison)) {
            $this->bon_de_livraison->add($bonDeLivraison);
        }

        return $this;
    }

    public function removeBonDeLivraison(BonDeLivraison $bonDeLivraison): static
    {
        $this->bon_de_livraison->removeElement($bonDeLivraison);

        return $this;
    }
}
