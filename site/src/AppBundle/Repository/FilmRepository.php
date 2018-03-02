<?php

namespace AppBundle\Repository;

/**
 * FilmRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class FilmRepository extends \Doctrine\ORM\EntityRepository
{
    public function searchProject($search) {
        $qb = $this->createQueryBuilder('f')
            ->where('f.name like :search')
            ->setParameter('search', '%' . $search . '%');

        return $qb
            ->getQuery()
            ->getResult();
    }
}
