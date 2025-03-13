<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
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

    #[ORM\Column(length: 50)]
    private ?string $libelleComm = null;

    #[ORM\Column(length: 50)]
    private ?string $utilComm = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 7, scale: 2)]
    private ?string $fdp = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 7, scale: 2)]
    private ?string $montantPaiem = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $datePaiem = null;

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

    #[ORM\Column(type: Types::TEXT)]
    private ?string $adrVoiePostComm = null;

    #[ORM\Column(length: 5)]
    private ?string $adrCodePostComm = null;

    #[ORM\Column(length: 50)]
    private ?string $adrVilleComm = null;

    #[ORM\ManyToOne(inversedBy: 'commandes')]
    private ?Article $article = null;

    #[ORM\ManyToOne(inversedBy: 'commandes')]
    private ?Utilisateur $utilisateur = null;

    #[ORM\ManyToOne(inversedBy: 'commandes')]
    private ?StatutCommande $statutCommande = null;

    #[ORM\ManyToOne(inversedBy: 'commandes')]
    private ?StatutPaiement $statutPaiement = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?BonDeLivraison $bondelivraisons = null;

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

    public function getLibelleComm(): ?string
    {
        return $this->libelleComm;
    }

    public function setLibelleComm(string $libelleComm): static
    {
        $this->libelleComm = $libelleComm;

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

    public function getAdrVoiePostComm(): ?string
    {
        return $this->adrVoiePostComm;
    }

    public function setAdrVoiePostComm(string $adrVoiePostComm): static
    {
        $this->adrVoiePostComm = $adrVoiePostComm;

        return $this;
    }

    public function getAdrCodePostComm(): ?string
    {
        return $this->adrCodePostComm;
    }

    public function setAdrCodePostComm(string $adrCodePostComm): static
    {
        $this->adrCodePostComm = $adrCodePostComm;

        return $this;
    }

    public function getAdrVilleComm(): ?string
    {
        return $this->adrVilleComm;
    }

    public function setAdrVilleComm(string $adrVilleComm): static
    {
        $this->adrVilleComm = $adrVilleComm;

        return $this;
    }

    public function getArticle(): ?Article
    {
        return $this->article;
    }

    public function setArticle(?Article $article): static
    {
        $this->article = $article;

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

    public function getStatutCommande(): ?StatutCommande
    {
        return $this->statutCommande;
    }

    public function setStatutCommande(?StatutCommande $statutCommande): static
    {
        $this->statutCommande = $statutCommande;

        return $this;
    }

    public function getStatutPaiement(): ?StatutPaiement
    {
        return $this->statutPaiement;
    }

    public function setStatutPaiement(?StatutPaiement $statutPaiement): static
    {
        $this->statutPaiement = $statutPaiement;

        return $this;
    }

    public function getBondelivraisons(): ?BonDeLivraison
    {
        return $this->bondelivraisons;
    }

    public function setBondelivraisons(?BonDeLivraison $bondelivraisons): static
    {
        $this->bondelivraisons = $bondelivraisons;

        return $this;
    }
}
