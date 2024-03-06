<?php

namespace App\Repository;

use App\Entity\TempMatch;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TempMatch>
 *
 * @method TempMatch|null find($id, $lockMode = null, $lockVersion = null)
 * @method TempMatch|null findOneBy(array $criteria, array $orderBy = null)
 * @method TempMatch[]    findAll()
 * @method TempMatch[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TempMatchRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TempMatch::class);
    }

//    /**
//     * @return TempMatch[] Returns an array of TempMatch objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?TempMatch
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
