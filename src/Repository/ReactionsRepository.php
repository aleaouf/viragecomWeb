<?php

namespace App\Repository;

use App\Entity\Reactions;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Reactions>
 *
 * @method Reactions|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reactions|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reactions[]    findAll()
 * @method Reactions[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReactionsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reactions::class);
    }
    public function countByArticleAndType(int $articleId, string $reactionType): int
{
    return $this->createQueryBuilder('r')
        ->select('COUNT(r.id)')
        ->andWhere('r.idArticle = :articleId')
        ->andWhere('r.typeReact = :reactionType')
        ->setParameter('articleId', $articleId)
        ->setParameter('reactionType', $reactionType)
        ->getQuery()
        ->getSingleScalarResult();
}

//    /**
//     * @return Reactions[] Returns an array of Reactions objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Reactions
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
