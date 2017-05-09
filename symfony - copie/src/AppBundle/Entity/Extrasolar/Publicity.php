<?php

namespace AppBundle\Entity\Extrasolar;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Publicity
 *
 * @ORM\Table(name="publicity")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Extrasolar\PublicityRepository")
 */
class Publicity
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     * @ORM\Column(name="banner", type="string", length=255, nullable=true)
     */
    private $picture;

    /**
    *
    * @Assert\Image(minWidth = 200,
    *     maxWidth = 1200,
    *     minHeight = 200,
    *     maxHeight = 600,)
    */
    private $file;
    /**
     * @var bool
     *
     * @ORM\Column(name="disable", type="boolean")
     */
    private $disable;

    /**
     * @var int
     *
     * @ORM\Column(name="location", type="integer", nullable=true)
     */
    private $location;

    /**
     * @var string
     *
     *@ORM\Column(name="link", type="string")
     */
     private $link;
     /**
      *  @var string
      */
     private $picturePath;
    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Publicity
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set picture
     *
     * @param string $picture
     *
     * @return Publicity
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set disable
     *
     * @param boolean $disable
     *
     * @return Publicity
     */
    public function setDisable($disable)
    {
        $this->disable = $disable;

        return $this;
    }

    /**
     * Get disable
     *
     * @return boolean
     */
    public function getDisable()
    {
        return $this->disable;
    }

    /**
     * Set location
     *
     * @param integer $location
     *
     * @return Publicity
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return integer
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set link
     *
     * @param integer $link
     *
     * @return Publicity
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set file
     *
     * @param integer $file
     *
     * @return Publicity
     */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set the value of Id
     *
     * @param int id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of Picture Path
     *
     * @return mixed
     */
    public function getPicturePath()
    {
        return $this->picturePath;
    }

    /**
     * Set the value of Picture Path
     *
     * @param mixed picturePath
     *
     * @return self
     */
    public function setPicturePath($picturePath)
    {
        $this->picturePath = $picturePath;

        return $this;
    }

}
