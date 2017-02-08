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
}
