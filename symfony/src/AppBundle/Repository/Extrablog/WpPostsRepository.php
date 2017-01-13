<?php
// src/AppBundle/Repository/Extrablog/WpPostsRepository.php
namespace AppBundle\Repository\Extrablog;

use Doctrine\ORM\EntityRepository;

class WpPostsRepository extends EntityRepository
{
    public function findLastPosts()
    {
        return $this->createQueryBuilder('p')
              ->OrderBy('p.postDate','DESC')
              ->setMaxResults(5)
              ->getQuery()
              ->getResult()
              ;
    }
}
