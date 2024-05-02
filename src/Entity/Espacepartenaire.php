<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Espacepartenaire
 *
 * @ORM\Table(name="espacepartenaire", indexes={@ORM\Index(name="id_type", columns={"id_type"}), @ORM\Index(name="id_categorie", columns={"id_categorie"}), @ORM\Index(name="id", columns={"id"})})
 * @ORM\Entity(repositoryClass=App\Repository\EspacepartenaireRepository::class)
 * @ORM\Entity
 */
class Espacepartenaire
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_espace", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEspace;

    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     * @ORM\Column(name="id", type="integer", nullable=false, options={"default"="2"})
     */
    private $id = 25;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     * @Assert\NotBlank
     * @Assert\Regex(
     *     pattern="/^[a-zA-Z0-9 ]+$/",
     *     message="Le nom ne doit contenir que des lettres, des chiffres et des espaces."
     * ) 
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="localisation", type="string", length=255, nullable=false)
     * @Assert\NotBlank
     */
    private $localisation;

    /**
     * @var string
     *
     * @ORM\Column(name="photos", type="string", length=255, nullable=false)

     */
    private $photos;

    /**
     * @var string
     * @Assert\NotBlank
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var bool
     *
     * @ORM\Column(name="accepted", type="boolean", nullable=false)
     */
    private $accepted=0;

    /**
     * @var int
     *
     * @ORM\Column(name="nbclick", type="integer", nullable=false)
     */
    private $nbclick=0;

/**
     * @var int|null
     *
     * @ORM\Column(name="id_categorie", type="integer", nullable=true)
     */
    private $idCategorie;

   
/**
 * @ORM\ManyToOne(targetEntity="App\Entity\Categorie", cascade={"persist"})
 * @ORM\JoinColumn(name="id_categorie", referencedColumnName="id_categorie")
 */
private $categorie;
    /**
     * @var \Type
     *
     * @ORM\ManyToOne(targetEntity="Type")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_type", referencedColumnName="id_type")
     * })
     * @Assert\NotBlank

     */
    private $idType;

    public function getIdEspace(): ?int
    {
        return $this->idEspace;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getLocalisation(): ?string
    {
        return $this->localisation;
    }

    public function setLocalisation(string $localisation): static
    {
        $this->localisation = $localisation;

        return $this;
    }

    public function getPhotos(): ?string
    {
        return $this->photos;
    }

    public function setPhotos(string $photos): static
    {
        $this->photos = $photos;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getIdCategorie(): ?int
    {
        return $this->idCategorie;
    }

    public function setIdCategorie(?int $idCategorie): static
    {
        $this->idCategorie = $idCategorie;

        return $this;
    }
    public function isAccepted(): ?bool
    {
        return $this->accepted;
    }

    public function setAccepted(bool $accepted): static
    {
        $this->accepted = $accepted;

        return $this;
    }

    public function getNbclick(): ?int
    {
        return $this->nbclick;
    }

    public function setNbclick(int $nbclick): static
    {
        $this->nbclick = $nbclick;

        return $this;
    }

     public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getIdType(): ?Type
    {
        return $this->idType;
    }

    public function setIdType(?Type $idType): static
    {
        $this->idType = $idType;

        return $this;
    }


}