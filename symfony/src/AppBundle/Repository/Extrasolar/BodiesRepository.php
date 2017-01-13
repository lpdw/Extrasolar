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
    public function getHost($id_host)
    {
      $query = $em->createQuery("SELECT b, t FROM Body b JOIN u.type t WHERE b.id = :id");
      $query->setParameter('id',$id_host);
      return $query->getResult();
    }

}
