<?php

namespace App\Entity\elab;

use Doctrine\ORM\Mapping as ORM;

/**
 * VlTreshhold
 *
 * @ORM\Table(name="vl_treshhold")
 * @ORM\Entity
 */
class VlTreshhold
{
    /**
     * @var int
     *
     * @ORM\Column(name="thresh_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $threshId;

    /**
     * @var int
     *
     * @ORM\Column(name="facility_id", type="integer", nullable=false)
     */
    private $facilityId;

    /**
     * @var int
     *
     * @ORM\Column(name="current_tresh", type="integer", nullable=false)
     */
    private $currentTresh;

    /**
     * @var int
     *
     * @ORM\Column(name="total_tresh", type="integer", nullable=false)
     */
    private $totalTresh;


}
