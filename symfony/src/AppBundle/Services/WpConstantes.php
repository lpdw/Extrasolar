<?php
// src/AppBundle/Services/WpConstantes.php
namespace AppBundle\Services;

class WpConstantes
{
  /**
   * @var EntityManager
   */
  protected $doctrine;

  public function __construct($doctrine)
  {
    $this->doctrine = $doctrine;
  }


  public function getRootURL()
  {
    return $this->doctrine
            ->getManager('extrablog')
            ->getRepository('AppBundle:WpOptions')
            ->getRootURL();
  }

  public function getBackgroundImage()
  {
    $id = $this->doctrine
            ->getManager('extrablog')
            ->getRepository('AppBundle:WpPostmeta')
            ->getBackgroundImagePostId();
            
    return $this->doctrine
            ->getManager('extrablog')
            ->getRepository('AppBundle:WpPosts')
            ->findPostContent($id);
  }
}
