<?php
// src/AppBundle/Repository/Extrablog/BodyRepository.php
namespace AppBundle\Repository\Extrasolar;

use Doctrine\ORM\EntityRepository;

class BodiesRepository extends EntityRepository
{
    public function findLastBodies()
    {
        return $this->createQueryBuilder('b')
              ->OrderBy('b.update_at','DESC')
              ->setMaxResults(10)
              ->getQuery()
              ->getResult()
              ;
    }
}
