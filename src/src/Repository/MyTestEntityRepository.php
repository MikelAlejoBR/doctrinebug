<?php

namespace App\Repository;

use App\Entity\MyTestEntity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MyTestEntity|null find($id, $lockMode = null, $lockVersion = null)
 * @method MyTestEntity|null findOneBy(array $criteria, array $orderBy = null)
 * @method MyTestEntity[]    findAll()
 * @method MyTestEntity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MyTestEntityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MyTestEntity::class);
    }

    // /**
    //  * @return MyTestEntity[] Returns an array of MyTestEntity objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MyTestEntity
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
