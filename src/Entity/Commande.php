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
    private ?\DateTimeInterface $DateComm = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $DateLivrComm = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 7, scale: 2)]
    private ?string $PrixTotComm = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 7, scale: 2)]
    private ?string $PrixUnitComm = null;

    #[ORM\Column(length: 50)]
    private ?string $LibelleComm = null;

    #[ORM\Column(length: 10)]
    private ?string $StatutComm = null;

    #[ORM\Column(length: 50)]
    private ?string $UtilComm = null;

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

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateComm(): ?\DateTimeInterface
    {
        return $this->DateComm;
    }

    public function setDateComm(\DateTimeInterface $DateComm): static
    {
        $this->DateComm = $DateComm;

        return $this;
    }

    public function getDateLivrComm(): ?\DateTimeInterface
    {
        return $this->DateLivrComm;
    }

    public function setDateLivrComm(\DateTimeInterface $DateLivrComm): static
    {
        $this->DateLivrComm = $DateLivrComm;

        return $this;
    }

    public function getPrixTotComm(): ?string
    {
        return $this->PrixTotComm;
    }

    public function setPrixTotComm(string $PrixTotComm): static
    {
        $this->PrixTotComm = $PrixTotComm;

        return $this;
    }

    public function getPrixUnitComm(): ?string
    {
        return $this->PrixUnitComm;
    }

    public function setPrixUnitComm(string $PrixUnitComm): static
    {
        $this->PrixUnitComm = $PrixUnitComm;

        return $this;
    }

    public function getLibelleComm(): ?string
    {
        return $this->LibelleComm;
    }

    public function setLibelleComm(string $LibelleComm): static
    {
        $this->LibelleComm = $LibelleComm;

        return $this;
    }

    public function getStatutComm(): ?string
    {
        return $this->StatutComm;
    }

    public function setStatutComm(string $StatutComm): static
    {
        $this->StatutComm = $StatutComm;

        return $this;
    }

    public function getUtilComm(): ?string
    {
        return $this->UtilComm;
    }

    public function setUtilComm(string $UtilComm): static
    {
        $this->UtilComm = $UtilComm;

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
}
