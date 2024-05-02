<?php

namespace App\Repository;

use App\Entity\Espacepartenaire;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class EspacepartenaireRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Espacepartenaire::class);
    }

    public function searchAcceptedByNameOrType(string $query): array
    {
        return $this->createQueryBuilder('e')
            ->join('e.idType', 't') // Joining the 'idType' association defined in Espacepartenaire
            ->where('e.accepted = true')
            ->andWhere('e.nom LIKE :query OR t.nomType LIKE :query')
            ->setParameter('query', '%' . $query . '%')
            ->getQuery()
            ->getResult();
    }
    public function searchALLByNameOrType(string $query): array
    {
        return $this->createQueryBuilder('e')
            ->join('e.idType', 't') // Joining the 'idType' association defined in Espacepartenaire
            ->Where('e.nom LIKE :query OR t.nomType LIKE :query')
            ->setParameter('query', '%' . $query . '%')
            ->getQuery()
            ->getResult();
    }
    public function findAllSortedByNbClick(): array
    {
        return $this->createQueryBuilder('e')
            ->orderBy('e.nbclick', 'DESC')
            ->getQuery()
            ->getResult();
    }

    // Custom method to find Espacepartenaires sorted by nom (name)
    public function findAllSortedByNom(): array
    {
        return $this->createQueryBuilder('e')
            ->orderBy('e.nom', 'ASC')
            ->getQuery()
            ->getResult();
    }
    public function findNotAccepted(): array
    {
        return $this->createQueryBuilder('e')
            ->where('e.accepted = false')
            ->getQuery()
            ->getResult();
    }
    
    public function findAcceptedSortedByNbClick(): array
    {
        return $this->createQueryBuilder('e')
            ->where('e.accepted = true')
            ->orderBy('e.nbclick', 'DESC')
            ->getQuery()
            ->getResult();
    }

    // Custom method to find accepted Espacepartenaires sorted by nom (name)
    public function findAcceptedSortedByNom(): array
    {
        return $this->createQueryBuilder('e')
            ->where('e.accepted = true')
            ->orderBy('e.nom', 'ASC')
            ->getQuery()
            ->getResult();
    }
    
}
