<?php
// src/AppBundle/Repository/Extrablog/WpPostmetaRepository.php
namespace AppBundle\Repository\Extrablog;

use Doctrine\ORM\EntityRepository;

class WpPostmetaRepository extends EntityRepository
{
    public function getBackgroundImagePostId()
    {
        return $this->createQueryBuilder('p')
                    ->Select('p.postId')
                    ->Where("p.metaKey = '_wp_trash_meta_status'")
                    ->OrderBy('p.postId','DESC')
                    ->setMaxResults(1)
                    ->getQuery()
                    ->getSingleScalarResult()
                    ;
    }

}
