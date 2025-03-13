<?php

namespace App\Entity;

use App\Repository\VendRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VendRepository::class)]
class Vend
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }
}
