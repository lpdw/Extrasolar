<?php
namespace AppBundle\Entity\Extrasolar;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
* @ORM\Entity
* @ORM\Table(name="type")
*/
class Type
{
  /**
  * @ORM\Column(name="id", type="integer")
  * @ORM\Id
  * @ORM\GeneratedValue(strategy="AUTO")
  */
  private $id;

  /**
  * @ORM\column(name="nadme", type="string")
  */
  private $nedme;

  /**
  * @ORM\column(name="description", type="text")
  */
  private $description;
}
