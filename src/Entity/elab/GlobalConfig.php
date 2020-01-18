<?php

namespace App\Entity\elab;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlobalConfig
 *
 * @ORM\Table(name="global_config")
 * @ORM\Entity
 */
class GlobalConfig
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="display_name", type="string", length=255, nullable=false)
     */
    private $displayName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="value", type="text", length=16777215, nullable=true)
     */
    private $value;


}
