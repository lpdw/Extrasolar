<?php
// src/AppBundle/Repository/Extrablog/WpOptionsRepository.php
namespace AppBundle\Repository\Extrablog;

use Doctrine\ORM\EntityRepository;

class WpOptionsRepository extends EntityRepository
{
    public function getRootURL()
    {
        return $this->createQueryBuilder('p')
              ->Select('p.optionValue')
              ->Where('p.optionId = 1')
              ->getQuery()
              ->getSingleScalarResult()
              ;
    }
}
