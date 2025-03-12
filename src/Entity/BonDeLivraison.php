<?php

namespace App\Entity;

use App\Repository\BonDeLivraisonRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BonDeLivraisonRepository::class)]
class BonDeLivraison
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $noFactBon = null;

    #[ORM\Column(length: 50)]
    private ?string $nomBon = null;

    #[ORM\Column(length: 50)]
    private ?string $adresseBon = null;

    #[ORM\Column(length: 50)]
    private ?string $idEntrBon = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateCommBon = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateExpBon = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateLivrBon = null;

    #[ORM\Column(length: 50)]
    private ?string $detailProdBon = null;

    #[ORM\Column]
    private ?int $quBon = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateFactBon = null;

    #[ORM\Column(length: 20)]
    private ?string $noTVABon = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $detailTransacBon = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 7, scale: 2)]
    private ?string $prixUnitHTVABon = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 7, scale: 2)]
    private ?string $fdpBon = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 7, scale: 2)]
    private ?string $fraisConditioBon = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 7, scale: 2)]
    private ?string $tvaBon = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 7, scale: 2)]
    private ?string $remiseBon = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 7, scale: 2)]
    private ?string $totalHTVA_TTCBon = null;

    #[ORM\Column(length: 50)]
    private ?string $idComm = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNoFactBon(): ?string
    {
        return $this->noFactBon;
    }

    public function setNoFactBon(string $noFactBon): static
    {
        $this->noFactBon = $noFactBon;

        return $this;
    }

    public function getNomBon(): ?string
    {
        return $this->nomBon;
    }

    public function setNomBon(string $nomBon): static
    {
        $this->nomBon = $nomBon;

        return $this;
    }

    public function getAdresseBon(): ?string
    {
        return $this->adresseBon;
    }

    public function setAdresseBon(string $adresseBon): static
    {
        $this->adresseBon = $adresseBon;

        return $this;
    }

    public function getIdEntrBon(): ?string
    {
        return $this->idEntrBon;
    }

    public function setIdEntrBon(string $idEntrBon): static
    {
        $this->idEntrBon = $idEntrBon;

        return $this;
    }

    public function getDateCommBon(): ?\DateTimeInterface
    {
        return $this->dateCommBon;
    }

    public function setDateCommBon(\DateTimeInterface $dateCommBon): static
    {
        $this->dateCommBon = $dateCommBon;

        return $this;
    }

    public function getDateExpBon(): ?\DateTimeInterface
    {
        return $this->dateExpBon;
    }

    public function setDateExpBon(\DateTimeInterface $dateExpBon): static
    {
        $this->dateExpBon = $dateExpBon;

        return $this;
    }

    public function getDateLivrBon(): ?\DateTimeInterface
    {
        return $this->dateLivrBon;
    }

    public function setDateLivrBon(\DateTimeInterface $dateLivrBon): static
    {
        $this->dateLivrBon = $dateLivrBon;

        return $this;
    }

    public function getDetailProdBon(): ?string
    {
        return $this->detailProdBon;
    }

    public function setDetailProdBon(string $detailProdBon): static
    {
        $this->detailProdBon = $detailProdBon;

        return $this;
    }

    public function getQuBon(): ?int
    {
        return $this->quBon;
    }

    public function setQuBon(int $quBon): static
    {
        $this->quBon = $quBon;

        return $this;
    }

    public function getDateFactBon(): ?\DateTimeInterface
    {
        return $this->dateFactBon;
    }

    public function setDateFactBon(\DateTimeInterface $dateFactBon): static
    {
        $this->dateFactBon = $dateFactBon;

        return $this;
    }

    public function getNoTVABon(): ?string
    {
        return $this->noTVABon;
    }

    public function setNoTVABon(string $noTVABon): static
    {
        $this->noTVABon = $noTVABon;

        return $this;
    }

    public function getDetailTransacBon(): ?string
    {
        return $this->detailTransacBon;
    }

    public function setDetailTransacBon(string $detailTransacBon): static
    {
        $this->detailTransacBon = $detailTransacBon;

        return $this;
    }

    public function getPrixUnitHTVABon(): ?string
    {
        return $this->prixUnitHTVABon;
    }

    public function setPrixUnitHTVABon(string $prixUnitHTVABon): static
    {
        $this->prixUnitHTVABon = $prixUnitHTVABon;

        return $this;
    }

    public function getFdpBon(): ?string
    {
        return $this->fdpBon;
    }

    public function setFdpBon(string $fdpBon): static
    {
        $this->fdpBon = $fdpBon;

        return $this;
    }

    public function getFraisConditioBon(): ?string
    {
        return $this->fraisConditioBon;
    }

    public function setFraisConditioBon(string $fraisConditioBon): static
    {
        $this->fraisConditioBon = $fraisConditioBon;

        return $this;
    }

    public function getTvaBon(): ?string
    {
        return $this->tvaBon;
    }

    public function setTvaBon(string $tvaBon): static
    {
        $this->tvaBon = $tvaBon;

        return $this;
    }

    public function getRemiseBon(): ?string
    {
        return $this->remiseBon;
    }

    public function setRemiseBon(string $remiseBon): static
    {
        $this->remiseBon = $remiseBon;

        return $this;
    }

    public function getTotalHTVATTCBon(): ?string
    {
        return $this->totalHTVA_TTCBon;
    }

    public function setTotalHTVATTCBon(string $totalHTVA_TTCBon): static
    {
        $this->totalHTVA_TTCBon = $totalHTVA_TTCBon;

        return $this;
    }

    public function getIdComm(): ?string
    {
        return $this->idComm;
    }

    public function setIdComm(string $idComm): static
    {
        $this->idComm = $idComm;

        return $this;
    }
}
