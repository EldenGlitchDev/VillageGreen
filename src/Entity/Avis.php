<?php

namespace App\Entity;

use App\Repository\AvisRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AvisRepository::class)]
class Avis
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $note = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $commAvis = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateAvis = null;

    #[ORM\Column(length: 50)]
    private ?string $idInstru = null;

    #[ORM\Column(length: 50)]
    private ?string $utilAvis = null;

    #[ORM\Column(length: 50)]
    private ?string $idUtil = null;

    /**
     * @var Collection<int, Article>
     */
    #[ORM\ManyToMany(targetEntity: Article::class, mappedBy: 'avis')]
    private Collection $articles;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?Utilisateur $utilisateur = null;

    public function __construct()
    {
        $this->articles = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNote(): ?int
    {
        return $this->note;
    }

    public function setNote(int $note): static
    {
        $this->note = $note;

        return $this;
    }

    public function getCommAvis(): ?string
    {
        return $this->commAvis;
    }

    public function setCommAvis(?string $commAvis): static
    {
        $this->commAvis = $commAvis;

        return $this;
    }

    public function getDateAvis(): ?\DateTimeInterface
    {
        return $this->dateAvis;
    }

    public function setDateAvis(\DateTimeInterface $dateAvis): static
    {
        $this->dateAvis = $dateAvis;

        return $this;
    }

    public function getIdInstru(): ?string
    {
        return $this->idInstru;
    }

    public function setIdInstru(string $idInstru): static
    {
        $this->idInstru = $idInstru;

        return $this;
    }

    public function getUtilAvis(): ?string
    {
        return $this->utilAvis;
    }

    public function setUtilAvis(string $utilAvis): static
    {
        $this->utilAvis = $utilAvis;

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
            $article->addAvi($this);
        }

        return $this;
    }

    public function removeArticle(Article $article): static
    {
        if ($this->articles->removeElement($article)) {
            $article->removeAvi($this);
        }

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
}
