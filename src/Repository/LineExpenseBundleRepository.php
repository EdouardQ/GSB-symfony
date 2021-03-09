<?php

namespace App\Repository;

use App\Entity\LineExpenseBundle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LineExpenseBundle|null find($id, $lockMode = null, $lockVersion = null)
 * @method LineExpenseBundle|null findOneBy(array $criteria, array $orderBy = null)
 * @method LineExpenseBundle[]    findAll()
 * @method LineExpenseBundle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LineExpenseBundleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LineExpenseBundle::class);
    }

    // /**
    //  * @return LineExpenseBundle[] Returns an array of LineExpenseBundle objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LineExpenseBundle
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
