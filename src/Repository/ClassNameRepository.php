<?php

namespace App\Repository;

use App\Entity\Ordinazioni;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Ordinazioni|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ordinazioni|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ordinazioni[]    findAll()
 * @method Ordinazioni[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClassNameRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ordinazioni::class);
    }

    // /**
    //  * @return Ordinazioni[] Returns an array of Ordinazioni objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Ordinazioni
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
