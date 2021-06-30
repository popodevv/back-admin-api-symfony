<?php

namespace App\Repository;

use App\Entity\UserPrice;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UserPrice|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserPrice|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserPrice[]    findAll()
 * @method UserPrice[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserPriceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserPrice::class);
    }

    // /**
    //  * @return UserPrice[] Returns an array of UserPrice objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UserPrice
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
