<?php

namespace App\Entity;

use App\Repository\CommanderRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommanderRepository::class)]
class Commander
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $idArt = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $idComm = null;

    #[ORM\Column(nullable: true)]
    private ?int $quantite_commande = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdArt(): ?string
    {
        return $this->idArt;
    }

    public function setIdArt(?string $idArt): static
    {
        $this->idArt = $idArt;

        return $this;
    }

    public function getIdComm(): ?string
    {
        return $this->idComm;
    }

    public function setIdComm(?string $idComm): static
    {
        $this->idComm = $idComm;

        return $this;
    }

    public function getQuantiteCommande(): ?int
    {
        return $this->quantite_commande;
    }

    public function setQuantiteCommande(?int $quantite_commande): static
    {
        $this->quantite_commande = $quantite_commande;

        return $this;
    }
}
