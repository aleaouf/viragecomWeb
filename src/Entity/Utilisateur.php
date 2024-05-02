<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity(repositoryClass=App\Repository\UtilisateurRepository::class)
 * @UniqueEntity(fields={"email"}, message="There is already an account with this email")
 */
class Utilisateur implements UserInterface
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private ?int $id = null;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=180, nullable=false, unique=true)
     */
    private ?string $email = null;

    /**
     * @var array
     *
     * @ORM\Column(name="roles", type="json", nullable=false)
     */
    private array $roles = [];

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", nullable=false)
     */
    private ?string $password = null;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_verified", type="boolean", nullable=false)
     */
    private bool $isVerified = false;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=20, nullable=false)
     */
    private ?string $nom = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prenom", type="string", length=20, nullable=true)
     */
    private ?string $prenom = null;

    /**
     * @var int
     *
     * @ORM\Column(name="age", type="integer", nullable=false)
     */
    private ?int $age = null;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=10, nullable=false)
     */
    private ?string $role = null;

    /**
     * @var bool
     *
     * @ORM\Column(name="banned", type="boolean", nullable=false)
     */
    private bool $banned = false;

    // Méthodes UserInterface

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getRoles(): array
    {
        return array_unique(array_merge($this->roles, ['ROLE_USER']));
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;
        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;
        return $this;
    }

    public function eraseCredentials(): void
    {
        // Effacer les données sensibles, si nécessaire.
    }

    public function isVerified(): bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(bool $isVerified): self
    {
        $this->isVerified = isVerified;
        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }
    public function setNom(?string $nom): self
{
    $this->nom = $nom; // Utilisez $nom au lieu de nom
    return $this;
}

 

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom =$prenom;
        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(?int $age): self
    {
        $this->age = $age;
        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(?string $role): self
    {
        $this->role = $role;
        return $this;
    }

    public function isBanned(): bool
    {
        return $this->banned;
    }

    public function setBanned(bool $banned): self
    {
        $this->banned = banned;
        return $this;
    }

    // Implémentation des méthodes requises par UserInterface

    public function getUserIdentifier(): string
    {
        return $this->email;
    }

    public function getUsername(): string
    {
        // Retourne l'email comme nom d'utilisateur unique
        return $this->email;
    }

    public function getSalt(): ?string
    {
        // Pas besoin de sel car vous utilisez probablement bcrypt ou un autre algorithme moderne
        return null;
    }
}
