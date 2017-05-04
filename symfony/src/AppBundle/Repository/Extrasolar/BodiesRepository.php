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
                    ->createQuery('SELECT n.name FROM AppBundle:Body n WHERE n.id = :id')
                    ->setParameter('id', (int)$id)
                    ->getResult();
      }
    }

    public function getValuesPlaneteByNameAndProps($name, $props) {
      // echo trim($name);
      // echo count($props);die();

      if($name != "" && count($props) > 0) {
        $queries = "SELECT n.name , ";

        for ($i=0; $i < count($props); $i++) {
          $queries .= "n." . $props[$i] .",";
        }

        $queries = rtrim($queries,", ");
        $queries .= " FROM AppBundle:Body n WHERE n.name = :name";

        return $this->getEntityManager()
                    ->createQuery($queries)
                    ->setParameter('name', trim($name))
                    ->getResult();
      }
    }

=======
>>>>>>> 174c7a5aeca09b9113b2de22055a09994fa04b5c
}
