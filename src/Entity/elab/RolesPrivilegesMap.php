<?php

namespace App\Entity\elab;

use Doctrine\ORM\Mapping as ORM;

/**
 * RolesPrivilegesMap
 *
 * @ORM\Table(name="roles_privileges_map", indexes={@ORM\Index(name="privilege_id", columns={"privilege_id"}), @ORM\Index(name="role_id", columns={"role_id"})})
 * @ORM\Entity
 */
class RolesPrivilegesMap
{
    /**
     * @var int
     *
     * @ORM\Column(name="map_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mapId;

    /**
     * @var int
     *
     * @ORM\Column(name="role_id", type="integer", nullable=false)
     */
    private $roleId;

    /**
     * @var int
     *
     * @ORM\Column(name="privilege_id", type="integer", nullable=false)
     */
    private $privilegeId;


}
