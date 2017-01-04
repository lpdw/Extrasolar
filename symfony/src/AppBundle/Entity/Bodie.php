<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
* @ORM\Entity
* @ORM\Table(name="bodie")
*/
class Bodie
{
  /**
  * @ORM\Column(name="id", type="integer")
  * @ORM\Id
  * @ORM\GeneratedValue(strategy="AUTO")
  */
  private $id;

  /**
  * @ORM\column(name="name", type="string", nullable=true)
  */
  private $name;

  /**
  * @ORM\column(name="ra", type="float", nullable=true)
  */
  private $ra;

  /**
  * @ORM\column(name="distance", type="float", nullable=true)
  */
  private $distance;

  /**
  * @ORM\column(name="masse", type="float", nullable=true)
  */
  private $masse;

  /**
  * @ORM\column(name="radius", type="float", nullable=true)
  */
  private $radius;

  /**
  * @ORM\column(name="density", type="float", nullable=true)
  */
  private $density;

  /**
  * @ORM\column(name="age", type="float", nullable=true)
  */
  private $age;

  /**
  * @ORM\column(name="seff", type="float", nullable=true)
  */
  private $seff;

  /**
  * @ORM\column(name="temperature", type="float", nullable=true)
  */
  private $temperature;

  /**
  * @ORM\column(name="molecules", type="string", nullable=true)
  */
  private $molecules;

  /**
  * @ORM\column(name="update_at", type="float", nullable=true)
  */
  private $update_at;

  /**
  * @ORM\column(name="discovery", type="date", nullable=true)
  */
  private $discovery;

  /**
  * @ORM\column(name="detection", type="string", nullable=true)
  */
  private $detection;

  /**
  * @ORM\column(name="decl", type="float", nullable=true)
  */
  private $decl;

  /**
  * @ORM\column(name="metallicity", type="float", nullable=true)
  */
  private $metallicity;

  /**
  * @ORM\column(name="spectral_type", type="string", nullable=true)
  */
  private $spectral_type;

  /**
  * @ORM\column(name="vari", type="string", nullable=true)
  */
  private $vari;

  /**
  * @ORM\column(name="axis", type="float", nullable=true)
  */
  private $axis;

  /**
  * @ORM\column(name="period", type="float", nullable=true)
  */
  private $period;

  /**
  * @ORM\column(name="excentricity", type="float", nullable=true)
  */
  private $excentricity;

  /**
  * @ORM\column(name="inclinaison", type="float", nullable=true)
  */
  private $inclinaison;

  /**
  * @ORM\column(name="omega", type="float", nullable=true)
  */
  private $omega;

  /**
  * @ORM\column(name="tref", type="float", nullable=true)
  */
  private $tref;

  /**
 * @ORM\ManyToOne(targetEntity="Bodie")
 * @ORM\JoinColumn(name="rotation_id", referencedColumnName="id")
 */
  private $rotation_id;

  /**
 * @ORM\ManyToOne(targetEntity="Type")
 * @ORM\JoinColumn(name="type_id", referencedColumnName="id")
 */
  private $type_id;
}
