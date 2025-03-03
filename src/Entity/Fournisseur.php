<?php

namespace App\Entity;

use App\Repository\FournisseurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    /**
     * @var Collection<int, Article>
     */
    #[ORM\OneToMany(targetEntity: Article::class, mappedBy: 'fournisseur')]
    private Collection $article;

    public function __construct()
    {
        $this->article = new ArrayCollection();
    }

    
   

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

    /**
     * @return Collection<int, Article>
     */
    public function getArticle(): Collection
    {
        return $this->article;
    }

    public function addArticle(Article $article): static
    {
        if (!$this->article->contains($article)) {
            $this->article->add($article);
            $article->setFournisseur($this);
        }

        return $this;
    }

    public function removeArticle(Article $article): static
    {
        if ($this->article->removeElement($article)) {
            // set the owning side to null (unless already changed)
            if ($article->getFournisseur() === $this) {
                $article->setFournisseur(null);
            }
        }

        return $this;
    }
}
