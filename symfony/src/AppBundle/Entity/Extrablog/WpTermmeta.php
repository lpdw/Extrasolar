<?php

namespace AppBundle\Entity\Extrablog;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpTermmeta
 *
 * @ORM\Table(name="wp_termmeta", indexes={@ORM\Index(name="term_id", columns={"term_id"}), @ORM\Index(name="meta_key", columns={"meta_key"})})
 * @ORM\Entity
 */
class WpTermmeta
{
    /**
     * @var integer
     *
     * @ORM\Column(name="meta_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $metaId;

    /**
     * @var integer
     *
     * @ORM\Column(name="term_id", type="bigint", nullable=false)
     */
    private $termId = '0';

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
