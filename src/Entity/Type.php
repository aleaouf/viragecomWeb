<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Type
 *
 * @ORM\Table(name="type")
 * @ORM\Entity(repositoryClass=App\Repository\TypeRepository::class)
 */
class Type
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_type", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idType;

    /**
     * @var string
     *
     * @ORM\Column(name="nomType", type="string", length=255, nullable=false)
     * @Assert\NotBlank
    *  @Assert\Regex(
     *     pattern= "/^[a-zA-Z0-9\s]*[a-zA-Z0-9][a-zA-Z0-9\s]*$/",
     *     message="Le type ne doit contenir que des lettres, des chiffres et des espaces."
     * ) 
     */
    private $nomType; // Corrected property name to match database column

    public function getIdType(): ?int
    {
        return $this->idType;
    }

    public function getNomType(): ?string
    {
        return $this->nomType;
    }

    public function setNomType(string $nomType): self
    {
        $this->nomType = $nomType;

        return $this;
    }
}
