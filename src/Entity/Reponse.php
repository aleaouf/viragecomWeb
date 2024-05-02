<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Reponse
 *
 * @ORM\Table(name="reponse", indexes={@ORM\Index(name="id_reclamation", columns={"id_reclamation"})})
 * @ORM\Entity(repositoryClass=App\Repository\ReponseRepository::class)
 */
class Reponse
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_reponse", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idReponse;

    /**
     * @var Reclamation
     * @ORM\ManyToOne(targetEntity="App\Entity\Reclamation")
     * @ORM\JoinColumn(name="id_reclamation", referencedColumnName="id_reclamation")
     */
    private $idReclamation;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=255, nullable=false)
     *  @Assert\NotBlank
     *@Assert\Regex(
     *pattern="/^[a-zA-Z0-9 ]+$/",
     *message="L'adresse ne doit contenir que des lettres, des chiffres et des espaces."
     *)
     */
    private $contenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_rep", type="date", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dateRep ;

    public function getIdReponse(): ?int
    {
        return $this->idReponse;
    }

    public function getIdReclamation(): ?Reclamation
    {
        return $this->idReclamation;
    }

    public function setIdReclamation(Reclamation $idReclamation): static
    {
        $this->idReclamation = $idReclamation;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): static
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getDateRep(): ?\DateTimeInterface
    {
        return $this->dateRep;
    }

    public function setDateRep(\DateTimeInterface $dateRep): static
    {
        $this->dateRep = $dateRep;

        return $this;
    }


}
