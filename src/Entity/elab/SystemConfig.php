<?php

namespace App\Entity\elab;

use Doctrine\ORM\Mapping as ORM;

/**
 * SystemConfig
 *
 * @ORM\Table(name="system_config")
 * @ORM\Entity
 */
class SystemConfig
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
     * @ORM\Column(name="value", type="string", length=255, nullable=true)
     */
    private $value;


}
