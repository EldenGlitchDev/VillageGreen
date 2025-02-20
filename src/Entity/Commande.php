<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommandeRepository::class)]
class Commande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateComm = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateLivrComm = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 7, scale: 2)]
    private ?string $prixTotalComm = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 7, scale: 2)]
    private ?string $prixUnitComm = null;

    #[ORM\Column(length: 50)]
    private ?string $libelleComm = null;

    #[ORM\Column(length: 10)]
    private ?string $statutComm = null;

    #[ORM\Column(length: 50)]
    private ?string $utilComm = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 7, scale: 2)]
    private ?string $sousTotalComm = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 7, scale: 2)]
    private ?string $fdp = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 7, scale: 2)]
    private ?string $montantPaiem = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $datePaiem = null;

    #[ORM\Column(length: 10)]
    private ?string $statutPaiem = null;

    #[ORM\Column(length: 20)]
    private ?string $methodePaiem = null;

    #[ORM\Column(length: 50)]
    private ?string $commandePaiem = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $adrFactUtil = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $adrLivrUtil = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 7, scale: 2)]
    private ?string $fraisExpComm = null;

    #[ORM\Column(length: 50)]
    private ?string $paysComm = null;

    #[ORM\Column(length: 50)]
    private ?string $idUtil = null;

    #[ORM\ManyToOne(inversedBy: 'commande')]
    private ?Utilisateur $utilisateur = null;

    /**
     * @var Collection<int, BonDeLivraison>
     */
    #[ORM\OneToMany(targetEntity: BonDeLivraison::class, mappedBy: 'commande')]
    private Collection $bon_de_livraison;

    /**
     * @var Collection<int, Appliquer>
     */
    #[ORM\OneToMany(targetEntity: Appliquer::class, mappedBy: 'commande')]
    private Collection $appliquer;

    /**
     * @var Collection<int, Article>
     */
    #[ORM\ManyToMany(targetEntity: Article::class, mappedBy: 'commande')]
    private Collection $articles;

    public function __construct()
    {
        $this->bon_de_livraison = new ArrayCollection();
        $this->appliquer = new ArrayCollection();
        $this->articles = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateComm(): ?\DateTimeInterface
    {
        return $this->dateComm;
    }

    public function setDateComm(\DateTimeInterface $dateComm): static
    {
        $this->dateComm = $dateComm;

        return $this;
    }

    public function getDateLivrComm(): ?\DateTimeInterface
    {
        return $this->dateLivrComm;
    }

    public function setDateLivrComm(\DateTimeInterface $dateLivrComm): static
    {
        $this->dateLivrComm = $dateLivrComm;

        return $this;
    }

    public function getPrixTotalComm(): ?string
    {
        return $this->prixTotalComm;
    }

    public function setPrixTotalComm(string $prixTotalComm): static
    {
        $this->prixTotalComm = $prixTotalComm;

        return $this;
    }

    public function getPrixUnitComm(): ?string
    {
        return $this->prixUnitComm;
    }

    public function setPrixUnitComm(string $prixUnitComm): static
    {
        $this->prixUnitComm = $prixUnitComm;

        return $this;
    }

    public function getLibelleComm(): ?string
    {
        return $this->libelleComm;
    }

    public function setLibelleComm(string $libelleComm): static
    {
        $this->libelleComm = $libelleComm;

        return $this;
    }

    public function getStatutComm(): ?string
    {
        return $this->statutComm;
    }

    public function setStatutComm(string $statutComm): static
    {
        $this->statutComm = $statutComm;

        return $this;
    }

    public function getUtilComm(): ?string
    {
        return $this->utilComm;
    }

    public function setUtilComm(string $utilComm): static
    {
        $this->utilComm = $utilComm;

        return $this;
    }

    public function getSousTotalComm(): ?string
    {
        return $this->sousTotalComm;
    }

    public function setSousTotalComm(string $sousTotalComm): static
    {
        $this->sousTotalComm = $sousTotalComm;

        return $this;
    }

    public function getFdp(): ?string
    {
        return $this->fdp;
    }

    public function setFdp(string $fdp): static
    {
        $this->fdp = $fdp;

        return $this;
    }

    public function getMontantPaiem(): ?string
    {
        return $this->montantPaiem;
    }

    public function setMontantPaiem(string $montantPaiem): static
    {
        $this->montantPaiem = $montantPaiem;

        return $this;
    }

    public function getDatePaiem(): ?\DateTimeInterface
    {
        return $this->datePaiem;
    }

    public function setDatePaiem(\DateTimeInterface $datePaiem): static
    {
        $this->datePaiem = $datePaiem;

        return $this;
    }

    public function getStatutPaiem(): ?string
    {
        return $this->statutPaiem;
    }

    public function setStatutPaiem(string $statutPaiem): static
    {
        $this->statutPaiem = $statutPaiem;

        return $this;
    }

    public function getMethodePaiem(): ?string
    {
        return $this->methodePaiem;
    }

    public function setMethodePaiem(string $methodePaiem): static
    {
        $this->methodePaiem = $methodePaiem;

        return $this;
    }

    public function getCommandePaiem(): ?string
    {
        return $this->commandePaiem;
    }

    public function setCommandePaiem(string $commandePaiem): static
    {
        $this->commandePaiem = $commandePaiem;

        return $this;
    }

    public function getAdrFactUtil(): ?string
    {
        return $this->adrFactUtil;
    }

    public function setAdrFactUtil(string $adrFactUtil): static
    {
        $this->adrFactUtil = $adrFactUtil;

        return $this;
    }

    public function getAdrLivrUtil(): ?string
    {
        return $this->adrLivrUtil;
    }

    public function setAdrLivrUtil(string $adrLivrUtil): static
    {
        $this->adrLivrUtil = $adrLivrUtil;

        return $this;
    }

    public function getFraisExpComm(): ?string
    {
        return $this->fraisExpComm;
    }

    public function setFraisExpComm(string $fraisExpComm): static
    {
        $this->fraisExpComm = $fraisExpComm;

        return $this;
    }

    public function getPaysComm(): ?string
    {
        return $this->paysComm;
    }

    public function setPaysComm(string $paysComm): static
    {
        $this->paysComm = $paysComm;

        return $this;
    }

    public function getIdUtil(): ?string
    {
        return $this->idUtil;
    }

    public function setIdUtil(string $idUtil): static
    {
        $this->idUtil = $idUtil;

        return $this;
    }

    public function getUtilisateur(): ?Utilisateur
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?Utilisateur $utilisateur): static
    {
        $this->utilisateur = $utilisateur;

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
            $bonDeLivraison->setCommande($this);
        }

        return $this;
    }

    public function removeBonDeLivraison(BonDeLivraison $bonDeLivraison): static
    {
        if ($this->bon_de_livraison->removeElement($bonDeLivraison)) {
            // set the owning side to null (unless already changed)
            if ($bonDeLivraison->getCommande() === $this) {
                $bonDeLivraison->setCommande(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Appliquer>
     */
    public function getAppliquer(): Collection
    {
        return $this->appliquer;
    }

    public function addAppliquer(Appliquer $appliquer): static
    {
        if (!$this->appliquer->contains($appliquer)) {
            $this->appliquer->add($appliquer);
            $appliquer->setCommande($this);
        }

        return $this;
    }

    public function removeAppliquer(Appliquer $appliquer): static
    {
        if ($this->appliquer->removeElement($appliquer)) {
            // set the owning side to null (unless already changed)
            if ($appliquer->getCommande() === $this) {
                $appliquer->setCommande(null);
            }
        }

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
            $article->addCommande($this);
        }

        return $this;
    }

    public function removeArticle(Article $article): static
    {
        if ($this->articles->removeElement($article)) {
            $article->removeCommande($this);
        }

        return $this;
    }
}
