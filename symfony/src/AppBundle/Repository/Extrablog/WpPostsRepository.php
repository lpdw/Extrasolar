<?php
// src/AppBundle/Repository/Extrablog/WpPostsRepository.php
namespace AppBundle\Repository\Extrablog;

use Doctrine\ORM\EntityRepository;

class WpPostsRepository extends EntityRepository
{
    public function findLastPosts()
    {
        return $this->getEntityManager()
              ->createQuery("SELECT p.postTitle, p.postDate, p.guid, p.postContent, u.userLogin FROM AppBundle:WpPosts p JOIN AppBundle:WpUsers u WITH u.id = p.postAuthor WHERE p.postStatus = 'publish' AND p.pingStatus = 'open' ORDER BY p.postDate DESC")
              ->setMaxResults(5)
              ->getResult()
              ;
    }
    public function getArticle($name)
    {
        return $this->getEntityManager()
                    ->createQuery("SELECT p.postTitle, p.postDate, p.guid, p.postContent, u.userLogin FROM AppBundle:WpPosts p JOIN AppBundle:WpUsers u WITH u.id = p.postAuthor where p.postContent LIKE '%".$name."%' ORDER BY p.postDate DESC")
                    ->setMaxResults(5)
                    ->getResult()
                    ;
    }
    public function findPostContent($id)
    {
      return $this->createQueryBuilder('p')
            ->Select('p.postContent')
            ->Where("p.id = {$id}")
            ->setMaxResults(1)
            ->getQuery()
            ->getSingleScalarResult()
            ;
    }
}
