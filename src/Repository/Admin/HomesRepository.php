<?php

namespace App\Repository\Admin;

use App\Entity\Admin\Homes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Homes|null find($id, $lockMode = null, $lockVersion = null)
 * @method Homes|null findOneBy(array $criteria, array $orderBy = null)
 * @method Homes[]    findAll()
 * @method Homes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HomesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Homes::class);
    }

    // /**
    //  * @return Homes[] Returns an array of Homes objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Homes
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
