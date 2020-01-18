<?php

namespace App\Entity\elab;

use Doctrine\ORM\Mapping as ORM;

/**
 * VlUserFacilityMap
 *
 * @ORM\Table(name="vl_user_facility_map", indexes={@ORM\Index(name="user_id", columns={"user_id"}), @ORM\Index(name="facility_id", columns={"facility_id"})})
 * @ORM\Entity
 */
class VlUserFacilityMap
{
    /**
     * @var int
     *
     * @ORM\Column(name="user_facility_map_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userFacilityMapId;

    /**
     * @var string
     *
     * @ORM\Column(name="user_id", type="string", length=255, nullable=false)
     */
    private $userId;

    /**
     * @var int
     *
     * @ORM\Column(name="facility_id", type="integer", nullable=false)
     */
    private $facilityId;


}
