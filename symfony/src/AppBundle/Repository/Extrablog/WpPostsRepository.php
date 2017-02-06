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
    public function getArticle($name)
    {
        return $this->getEntityManager()
                    ->createQuery("SELECT p FROM AppBundle:WpPosts p where p.postContent LIKE '%".$name."%' ORDER BY p.postDate DESC")
                    ->setMaxResults(5)
                    ->getResult()
                    ;
    }
}
