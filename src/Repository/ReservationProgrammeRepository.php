<?php

namespace App\Repository;

use App\Entity\ReservationProgramme;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ReservationProgramme>
 *
 * @method ReservationProgramme|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReservationProgramme|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReservationProgramme[]    findAll()
 * @method ReservationProgramme[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservationProgrammeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReservationProgramme::class);
    }

    //    /**
    //     * @return ReservationProgramme[] Returns an array of ReservationProgramme objects
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

    //    public function findOneBySomeField($value): ?ReservationProgramme
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
