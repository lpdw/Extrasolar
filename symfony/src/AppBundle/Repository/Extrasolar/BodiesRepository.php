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
    public function findAllBodies()
    {
        return $this->createQueryBuilder('b')
              ->join('AppBundle:Type', 't', 'WITH', 't.id = b.type_id')
              ->getQuery()
              ->getResult()
              ;
    }
    public function getHost($host_id)
    {
      return $this->getEntityManager()
                  ->createQuery("SELECT b, t FROM AppBundle:Body b JOIN b.type_id t WHERE b.id = :id")
                  ->setParameter('id',$host_id)
                  ->getSingleResult()
                  ;
    }


}
