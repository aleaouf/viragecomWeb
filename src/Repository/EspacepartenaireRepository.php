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
    
}
