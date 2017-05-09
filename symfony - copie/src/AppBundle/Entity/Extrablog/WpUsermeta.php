<?php

namespace AppBundle\Entity\Extrablog;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpUsermeta
 *
 * @ORM\Table(name="wp_usermeta", indexes={@ORM\Index(name="user_id", columns={"user_id"}), @ORM\Index(name="meta_key", columns={"meta_key"})})
 * @ORM\Entity
 */
class WpUsermeta
{
    /**
     * @var integer
     *
     * @ORM\Column(name="umeta_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $umetaId;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="bigint", nullable=false)
     */
    private $userId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="meta_key", type="string", length=255, nullable=true)
     */
    private $metaKey;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_value", type="text", nullable=true)
     */
    private $metaValue;


}
