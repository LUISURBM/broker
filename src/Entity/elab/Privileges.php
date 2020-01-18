<?php

namespace App\Entity\elab;

use Doctrine\ORM\Mapping as ORM;

/**
 * Privileges
 *
 * @ORM\Table(name="privileges", indexes={@ORM\Index(name="resource_id", columns={"resource_id"})})
 * @ORM\Entity
 */
class Privileges
{
    /**
     * @var int
     *
     * @ORM\Column(name="privilege_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $privilegeId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="privilege_name", type="string", length=255, nullable=true)
     */
    private $privilegeName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="display_name", type="string", length=255, nullable=true)
     */
    private $displayName;

    /**
     * @var \Resources
     *
     * @ORM\ManyToOne(targetEntity="Resources")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="resource_id", referencedColumnName="resource_id")
     * })
     */
    private $resource;


}
