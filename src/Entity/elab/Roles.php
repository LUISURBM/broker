<?php

namespace App\Entity\elab;

use Doctrine\ORM\Mapping as ORM;

/**
 * Roles
 *
 * @ORM\Table(name="roles")
 * @ORM\Entity
 */
class Roles
{
    /**
     * @var int
     *
     * @ORM\Column(name="role_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $roleId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="role_name", type="string", length=255, nullable=true)
     */
    private $roleName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="role_code", type="string", length=255, nullable=true)
     */
    private $roleCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=true)
     */
    private $status;

    /**
     * @var string|null
     *
     * @ORM\Column(name="landing_page", type="string", length=255, nullable=true)
     */
    private $landingPage;


}
