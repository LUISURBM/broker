<?php

namespace App\Entity\elab;

use Doctrine\ORM\Mapping as ORM;

/**
 * RSampleControls
 *
 * @ORM\Table(name="r_sample_controls")
 * @ORM\Entity
 */
class RSampleControls
{
    /**
     * @var int
     *
     * @ORM\Column(name="r_sample_control_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $rSampleControlId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="r_sample_control_name", type="string", length=255, nullable=true)
     */
    private $rSampleControlName;


}
