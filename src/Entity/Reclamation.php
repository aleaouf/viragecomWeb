<?php

namespace App\Entity;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation")
 * @ORM\Entity(repositoryClass=App\Repository\ReclamationRepository::class)
 */
class Reclamation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_reclamation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idReclamation;

    /**
     * @var Utilisateur
     *@ORM\ManyToOne(targetEntity="App\Entity\Utilisateur")
     * @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
   *  @Assert\NotBlank
     *@Assert\Regex(
     *pattern="/^[a-zA-Z0-9 ]+$/",
     *message="Ce champ ne doit contenir que des lettres, des chiffres et des espaces."
     *)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=255, nullable=false)
     *  @Assert\NotBlank
     *@Assert\Regex(
     *pattern="/^[a-zA-Z0-9 ]+$/",
     *message="L'adresse ne doit contenir que des lettres, des chiffres et des espaces."
     *)
     * 
     */
    private $contenu;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=false, options={"default"="en attente"})
     */
    private $status = 'en attente';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_env", type="date", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dateEnv ;

    public function getIdReclamation(): ?int
    {
        return $this->idReclamation;
    }

    public function getIdUser(): ?Utilisateur
    {
        return $this->idUser;
    }

    public function setIdUser(Utilisateur $idUser): static
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;

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

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getDateEnv(): ?\DateTimeInterface
    {
        return $this->dateEnv;
    }

    public function setDateEnv(\DateTimeInterface $dateEnv): static
    {
        $this->dateEnv = $dateEnv;

        return $this;
    }


}
