<?php

namespace App\Entity;

use App\Repository\UtilisateurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UtilisateurRepository::class)]
#[ORM\UniqueConstraint(name: 'UNIQ_IDENTIFIER_EMAIL', fields: ['email'])]
class Utilisateur implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180)]
    private ?string $email = null;

    /**
     * @var list<string> The user roles
     */
    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(length: 50)]
    private ?string $nomUtil = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $prenomUtil = null;

    #[ORM\Column(length: 14, nullable: true)]
    private ?string $siren = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $mailUtil = null;

    #[ORM\Column(length: 50)]
    private ?string $numTelUtil = null;

    #[ORM\Column(length: 50)]
    private ?string $typeUtil = null;

    #[ORM\Column(length: 50, nullable:true)]
    private ?string $mdpUtil = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     *
     * @return list<string>
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    /**
     * @param list<string> $roles
     */
    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getNomUtil(): ?string
    {
        return $this->nomUtil;
    }

    public function setNomUtil(string $nomUtil): static
    {
        $this->nomUtil = $nomUtil;

        return $this;
    }

    public function getPrenomUtil(): ?string
    {
        return $this->prenomUtil;
    }

    public function setPrenomUtil(?string $prenomUtil): static
    {
        $this->prenomUtil = $prenomUtil;

        return $this;
    }

    public function getSiren(): ?string
    {
        return $this->siren;
    }

    public function setSiren(?string $siren): static
    {
        $this->siren = $siren;

        return $this;
    }

    public function getMailUtil(): ?string
    {
        return $this->mailUtil;
    }

    public function setMailUtil(string $mailUtil): static
    {
        $this->mailUtil = $mailUtil;

        return $this;
    }

    public function getNumTelUtil(): ?string
    {
        return $this->numTelUtil;
    }

    public function setNumTelUtil(string $numTelUtil): static
    {
        $this->numTelUtil = $numTelUtil;

        return $this;
    }

    public function getTypeUtil(): ?string
    {
        return $this->typeUtil;
    }

    public function setTypeUtil(string $typeUtil): static
    {
        $this->typeUtil = $typeUtil;

        return $this;
    }

    public function getMdpUtil(): ?string
    {
        return $this->mdpUtil;
    }

    public function setMdpUtil(string $mdpUtil): static
    {
        $this->mdpUtil = $mdpUtil;

        return $this;
    }
}
