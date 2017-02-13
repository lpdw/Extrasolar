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
              ->join('AppBundle:Type', 't', 'WITH', 't.id = b.type_id')
              ->Where('t.categorie != \'point\'')
              ->setMaxResults(5)
              ->getQuery()
              ->getResult()
              ;
    }

    public function findAllBodies()
    {
        return $this->createQueryBuilder('b')
              ->join('AppBundle:Type', 't', 'WITH', 't.id = b.type_id')
              ->Where('t.categorie != \'point\'')
              ->getQuery()
              ->getResult()
              ;
    }

    public function findAllBodiesAdmin(){
        return $this->createQueryBuilder('b')
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
