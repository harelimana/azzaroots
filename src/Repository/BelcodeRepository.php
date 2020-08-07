<?php

namespace App\Repository;

use App\Entity\Belcode;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Belcode|null find($id, $lockMode = null, $lockVersion = null)
 * @method Belcode|null findOneBy(array $criteria, array $orderBy = null)
 * @method Belcode[]    findAll()
 * @method Belcode[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BelcodeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Belcode::class);
    }

    // /**
    //  * @return Belcode[] Returns an array of Belcode objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Belcode
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
