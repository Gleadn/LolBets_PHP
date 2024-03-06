<?php

namespace App\Repository;

use App\Entity\TempLeagues;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TempLeagues>
 *
 * @method TempLeagues|null find($id, $lockMode = null, $lockVersion = null)
 * @method TempLeagues|null findOneBy(array $criteria, array $orderBy = null)
 * @method TempLeagues[]    findAll()
 * @method TempLeagues[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TempLeaguesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TempLeagues::class);
    }

//    /**
//     * @return TempLeagues[] Returns an array of TempLeagues objects
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

//    public function findOneBySomeField($value): ?TempLeagues
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
