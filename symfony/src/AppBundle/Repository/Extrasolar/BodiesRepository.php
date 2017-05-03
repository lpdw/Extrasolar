<?php
// src/AppBundle/Repository/Extrablog/BodyRepository.php
namespace AppBundle\Repository\Extrasolar;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query;

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

    public function findAllBodiesForAPI()
    {
      return $this->getEntityManager('b')
              ->createQuery("SELECT b, t FROM AppBundle:Body b JOIN b.type_id t WHERE t.categorie != 'point'")
              ->getResult(Query::HYDRATE_ARRAY)
              ;
    }

    public function findAllBodiesAdmin(){
        return $this->createQueryBuilder('b')
              ->getQuery()
              ->getResult()
              ;
    }

    public function getHost($host_name)
    {
      return $this->getEntityManager()
                  ->createQuery("SELECT b, t FROM AppBundle:Body b JOIN b.type_id t WHERE b.name = :name")
                  ->setParameter('name',$host_name)
                  ->getSingleResult()
                  ;
    }

    public function getListPlaneteByName($name="") {
      if($name != "") {
        return $this->getEntityManager()
                    ->createQuery('SELECT n.name, n.id FROM AppBundle:Body n WHERE n.name LIKE :name')
                    ->setParameter('name', '%' . $name . '%')
                    ->getResult();
      }

    }

    public function getPlaneteById($id="") {
      if($id != "") {
        return $this->getEntityManager()
                    ->createQuery('SELECT n FROM AppBundle:Body n WHERE n.id = :id')
                    ->setParameter('id', (int)$id)
                    ->getResult();
      }
    }

    public function getValuesPlaneteByNameAndProps($id="", $props= array()) {
      if($id != "") {
        return $this->getEntityManager()
                    ->createQuery('SELECT n FROM AppBundle:Body n WHERE n.id = :id')
                    ->setParameter('id', (int)$id)
                    ->getResult();
      }
    }

}
