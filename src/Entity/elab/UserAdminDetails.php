<?php

namespace App\Entity\elab;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserAdminDetails
 *
 * @ORM\Table(name="user_admin_details", uniqueConstraints={@ORM\UniqueConstraint(name="user_admin_id", columns={"user_admin_id"})})
 * @ORM\Entity
 */
class UserAdminDetails
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(name="user_admin_id", type="integer", nullable=false)
     */
    private $userAdminId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_admin_name", type="string", length=255, nullable=true)
     */
    private $userAdminName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_admin_login", type="string", length=255, nullable=true)
     */
    private $userAdminLogin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_admin_password", type="string", length=255, nullable=true)
     */
    private $userAdminPassword;


}
