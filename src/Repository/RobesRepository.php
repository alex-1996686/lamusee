<?php

namespace App\Repository;

use App\Entity\Robes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Robes>
 *
 * @method Robes|null find($id, $lockMode = null, $lockVersion = null)
 * @method Robes|null findOneBy(array $criteria, array $orderBy = null)
 * @method Robes[]    findAll()
 * @method Robes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RobesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Robes::class);
    }

//    /**
//     * @return Robes[] Returns an array of Robes objects
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

//    public function findOneBySomeField($value): ?Robes
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
