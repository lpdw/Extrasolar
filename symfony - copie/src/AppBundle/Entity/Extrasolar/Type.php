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
  * @ORM\column(name="name", type="string")
  */
  private $name;

  /**
  * @var string
  *
  * @ORM\column(name="categorie", type="string")
  */
  private $categorie;

  /**
  * @var string
  *
  * @ORM\column(name="description", type="text", nullable=true)
  */
  private $description;

  /**
  * @var string
  *
  * @ORM\column(name="picture", type="text", nullable=true)
  */
  private $picture;

  /**
  * @Assert\Image(minWidth = 50,
  *     maxWidth = 600,
  *     minHeight = 50,
  *     maxHeight = 600)
   */
   private $file;

   private $picturePath;
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
     * Get the value of Description
     *
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of Description
     *
     * @param mixed description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    public function __toString()
    {
        return $this->name;
    }



    /**
     * Get the value of Categorie
     *
     * @return mixed
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set the value of Categorie
     *
     * @param mixed categorie
     *
     * @return self
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }
    /**
     * Get the value of Picture
     *
     * @return mixed
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set the value of Picture
     *
     * @param mixed categorie
     *
     * @return self
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get the value of File
     *
     * @return mixed
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set the value of File
     *
     * @param mixed categorie
     *
     * @return self
     */
    public function setFile($file)
    {
        $this->file = $file;

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
