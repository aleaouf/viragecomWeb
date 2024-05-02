<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Articles
 *
 * @ORM\Table(name="articles")
  * @ORM\Entity(repositoryClass=App\Repository\ArticlesRepository::class)

 */
class Articles
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    #[Assert\NotBlank(message:"nom doit etre non vide")]
    #[Assert\Length(min:5,max:18, minMessage:"Doit etre > 5.", maxMessage:"Doit etre <=18")]
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    #[Assert\NotBlank(message:"description doit etre non vide")]
    #[Assert\Length(min:10, minMessage:"Doit etre > 10")]
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     */
    #[Assert\NotBlank(message:"prix doit etre non vide")]
    #[Assert\Regex(pattern: "/^\d+.+$/", message: "Le prix ne doit contenir que des chiffres." )]
    private $prix;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    
    private $image;

    /**
     * @var int
     *
     * @ORM\Column(name="contact", type="integer", nullable=false)
     */
    #[Assert\NotBlank(message:"contact doit etre non vide")]
    #[Assert\Length(min:7,max:10, minMessage:"Doit etre > 7.", maxMessage:"Doit etre <=100")]
    private $contact;

    /**
     * @var int
     *
     * @ORM\Column(name="quantite", type="integer", nullable=false)
     */
    #[Assert\NotBlank(message:"quantite doit etre non vide")]
    #[Assert\Type(
        type: 'integer',
        message: "Le quantite doit être un nombre."
    )]
    private $quantite;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getContact(): ?int
    {
        return $this->contact;
    }

    public function setContact(int $contact): static
    {
        $this->contact = $contact;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): static
    {
        $this->quantite = $quantite;

        return $this;
    }


}
