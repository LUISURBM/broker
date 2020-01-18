<?php

namespace App\Entity\elab;

use Doctrine\ORM\Mapping as ORM;

/**
 * RSampleStatus
 *
 * @ORM\Table(name="r_sample_status")
 * @ORM\Entity
 */
class RSampleStatus
{
    /**
     * @var int
     *
     * @ORM\Column(name="status_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $statusId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status_name", type="string", length=255, nullable=true)
     */
    private $statusName;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=45, nullable=false, options={"default"="active"})
     */
    private $status = 'active';


}
