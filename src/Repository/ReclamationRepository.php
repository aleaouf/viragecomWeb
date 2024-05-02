<?php

namespace App\Repository;

use App\Entity\Reclamation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Reclamation>
 *
 * @method Reclamation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reclamation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reclamation[]    findAll()
 * @method Reclamation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReclamationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reclamation::class);
    }

    /**
     * Find reclamations by status.
     *
     * @param string $status The status to search for
     *
     * @return Reclamation[] Returns an array of Reclamation objects
     */
    public function findByStatus(string $status): array
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.status = :status')
            ->setParameter('status', $status)
            ->orderBy('r.idReclamation', 'ASC')
            ->getQuery()
            ->getResult();
    }

     /**
     * Find reclamations by user ID.
     *
     * @param int $userId The ID of the user
     *
     * @return Reclamation[] Returns an array of Reclamation objects
     */
    public function findByUserId(int $userId): array
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.idUser = :userId')
            ->setParameter('userId', $userId)
            ->orderBy('r.idReclamation', 'ASC')
            ->getQuery()
            ->getResult();
    }
}
