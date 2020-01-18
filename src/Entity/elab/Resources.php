<?php

namespace App\Entity\elab;

use Doctrine\ORM\Mapping as ORM;

/**
 * Resources
 *
 * @ORM\Table(name="resources", uniqueConstraints={@ORM\UniqueConstraint(name="resource_name", columns={"resource_name"})})
 * @ORM\Entity
 */
class Resources
{
    /**
     * @var int
     *
     * @ORM\Column(name="resource_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $resourceId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="resource_name", type="string", length=255, nullable=true)
     */
    private $resourceName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="display_name", type="string", length=255, nullable=true)
     */
    private $displayName;


}
