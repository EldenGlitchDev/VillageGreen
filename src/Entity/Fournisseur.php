<?php

namespace App\Entity;

use App\Repository\FournisseurRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FournisseurRepository::class)]
class Fournisseur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $nomFourni = null;

    #[ORM\Column(length: 50)]
    private ?string $mailFourni = null;

    #[ORM\Column(length: 50)]
    private ?string $adresseFourni = null;

    #[ORM\Column(length: 50)]
    private ?string $telFourni = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomFourni(): ?string
    {
        return $this->nomFourni;
    }

    public function setNomFourni(string $nomFourni): static
    {
        $this->nomFourni = $nomFourni;

        return $this;
    }

    public function getMailFourni(): ?string
    {
        return $this->mailFourni;
    }

    public function setMailFourni(string $mailFourni): static
    {
        $this->mailFourni = $mailFourni;

        return $this;
    }

    public function getAdresseFourni(): ?string
    {
        return $this->adresseFourni;
    }

    public function setAdresseFourni(string $adresseFourni): static
    {
        $this->adresseFourni = $adresseFourni;

        return $this;
    }

    public function getTelFourni(): ?string
    {
        return $this->telFourni;
    }

    public function setTelFourni(string $telFourni): static
    {
        $this->telFourni = $telFourni;

        return $this;
    }
}
