<?php
namespace AppBundle\Entity\Extrasolar;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
* @ORM\Entity(repositoryClass="AppBundle\Repository\Extrasolar\BodiesRepository")
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

    /**
     * Get the value of Id
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of Id
     *
     * @param mixed id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of Name
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of Name
     *
     * @param mixed name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of Ra
     *
     * @return mixed
     */
    public function getRa()
    {
        return $this->ra;
    }

    /**
     * Set the value of Ra
     *
     * @param mixed ra
     *
     * @return self
     */
    public function setRa($ra)
    {
        $this->ra = $ra;

        return $this;
    }

    /**
     * Get the value of Distance
     *
     * @return mixed
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * Set the value of Distance
     *
     * @param mixed distance
     *
     * @return self
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;

        return $this;
    }

    /**
     * Get the value of Masse
     *
     * @return mixed
     */
    public function getMasse()
    {
        return $this->masse;
    }

    /**
     * Set the value of Masse
     *
     * @param mixed masse
     *
     * @return self
     */
    public function setMasse($masse)
    {
        $this->masse = $masse;

        return $this;
    }

    /**
     * Get the value of Radius
     *
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * Set the value of Radius
     *
     * @param mixed radius
     *
     * @return self
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;

        return $this;
    }

    /**
     * Get the value of Density
     *
     * @return mixed
     */
    public function getDensity()
    {
        return $this->density;
    }

    /**
     * Set the value of Density
     *
     * @param mixed density
     *
     * @return self
     */
    public function setDensity($density)
    {
        $this->density = $density;

        return $this;
    }

    /**
     * Get the value of Age
     *
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of Age
     *
     * @param mixed age
     *
     * @return self
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get the value of Seff
     *
     * @return mixed
     */
    public function getSeff()
    {
        return $this->seff;
    }

    /**
     * Set the value of Seff
     *
     * @param mixed seff
     *
     * @return self
     */
    public function setSeff($seff)
    {
        $this->seff = $seff;

        return $this;
    }

    /**
     * Get the value of Temperature
     *
     * @return mixed
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * Set the value of Temperature
     *
     * @param mixed temperature
     *
     * @return self
     */
    public function setTemperature($temperature)
    {
        $this->temperature = $temperature;

        return $this;
    }

    /**
     * Get the value of Molecules
     *
     * @return mixed
     */
    public function getMolecules()
    {
        return $this->molecules;
    }

    /**
     * Set the value of Molecules
     *
     * @param mixed molecules
     *
     * @return self
     */
    public function setMolecules($molecules)
    {
        $this->molecules = $molecules;

        return $this;
    }

    /**
     * Get the value of Update At
     *
     * @return mixed
     */
    public function getUpdateAt()
    {
        return $this->update_at;
    }

    /**
     * Set the value of Update At
     *
     * @param mixed update_at
     *
     * @return self
     */
    public function setUpdateAt($update_at)
    {
        $this->update_at = $update_at;

        return $this;
    }

    /**
     * Get the value of Discovery
     *
     * @return mixed
     */
    public function getDiscovery()
    {
        return $this->discovery;
    }

    /**
     * Set the value of Discovery
     *
     * @param mixed discovery
     *
     * @return self
     */
    public function setDiscovery($discovery)
    {
        $this->discovery = $discovery;

        return $this;
    }

    /**
     * Get the value of Detection
     *
     * @return mixed
     */
    public function getDetection()
    {
        return $this->detection;
    }

    /**
     * Set the value of Detection
     *
     * @param mixed detection
     *
     * @return self
     */
    public function setDetection($detection)
    {
        $this->detection = $detection;

        return $this;
    }

    /**
     * Get the value of Decl
     *
     * @return mixed
     */
    public function getDecl()
    {
        return $this->decl;
    }

    /**
     * Set the value of Decl
     *
     * @param mixed decl
     *
     * @return self
     */
    public function setDecl($decl)
    {
        $this->decl = $decl;

        return $this;
    }

    /**
     * Get the value of Metallicity
     *
     * @return mixed
     */
    public function getMetallicity()
    {
        return $this->metallicity;
    }

    /**
     * Set the value of Metallicity
     *
     * @param mixed metallicity
     *
     * @return self
     */
    public function setMetallicity($metallicity)
    {
        $this->metallicity = $metallicity;

        return $this;
    }

    /**
     * Get the value of Spectral Type
     *
     * @return mixed
     */
    public function getSpectralType()
    {
        return $this->spectral_type;
    }

    /**
     * Set the value of Spectral Type
     *
     * @param mixed spectral_type
     *
     * @return self
     */
    public function setSpectralType($spectral_type)
    {
        $this->spectral_type = $spectral_type;

        return $this;
    }

    /**
     * Get the value of Vari
     *
     * @return mixed
     */
    public function getVari()
    {
        return $this->vari;
    }

    /**
     * Set the value of Vari
     *
     * @param mixed vari
     *
     * @return self
     */
    public function setVari($vari)
    {
        $this->vari = $vari;

        return $this;
    }

    /**
     * Get the value of Axis
     *
     * @return mixed
     */
    public function getAxis()
    {
        return $this->axis;
    }

    /**
     * Set the value of Axis
     *
     * @param mixed axis
     *
     * @return self
     */
    public function setAxis($axis)
    {
        $this->axis = $axis;

        return $this;
    }

    /**
     * Get the value of Period
     *
     * @return mixed
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Set the value of Period
     *
     * @param mixed period
     *
     * @return self
     */
    public function setPeriod($period)
    {
        $this->period = $period;

        return $this;
    }

    /**
     * Get the value of Excentricity
     *
     * @return mixed
     */
    public function getExcentricity()
    {
        return $this->excentricity;
    }

    /**
     * Set the value of Excentricity
     *
     * @param mixed excentricity
     *
     * @return self
     */
    public function setExcentricity($excentricity)
    {
        $this->excentricity = $excentricity;

        return $this;
    }

    /**
     * Get the value of Inclinaison
     *
     * @return mixed
     */
    public function getInclinaison()
    {
        return $this->inclinaison;
    }

    /**
     * Set the value of Inclinaison
     *
     * @param mixed inclinaison
     *
     * @return self
     */
    public function setInclinaison($inclinaison)
    {
        $this->inclinaison = $inclinaison;

        return $this;
    }

    /**
     * Get the value of Omega
     *
     * @return mixed
     */
    public function getOmega()
    {
        return $this->omega;
    }

    /**
     * Set the value of Omega
     *
     * @param mixed omega
     *
     * @return self
     */
    public function setOmega($omega)
    {
        $this->omega = $omega;

        return $this;
    }

    /**
     * Get the value of Tref
     *
     * @return mixed
     */
    public function getTref()
    {
        return $this->tref;
    }

    /**
     * Set the value of Tref
     *
     * @param mixed tref
     *
     * @return self
     */
    public function setTref($tref)
    {
        $this->tref = $tref;

        return $this;
    }

    /**
     * Get the value of Rotation Id
     *
     * @return mixed
     */
    public function getRotationId()
    {
        return $this->rotation_id;
    }

    /**
     * Set the value of Rotation Id
     *
     * @param mixed rotation_id
     *
     * @return self
     */
    public function setRotationId($rotation_id)
    {
        $this->rotation_id = $rotation_id;

        return $this;
    }

    /**
     * Get the value of Type Id
     *
     * @return mixed
     */
    public function getTypeId()
    {
        return $this->type_id;
    }

    /**
     * Set the value of Type Id
     *
     * @param mixed type_id
     *
     * @return self
     */
    public function setTypeId($type_id)
    {
        $this->type_id = $type_id;

        return $this;
    }

    public function __toString()
    {
        return $this->name;
    }
}
