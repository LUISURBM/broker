<?php

namespace App\Entity\elab;

use Doctrine\ORM\Mapping as ORM;

/**
 * FacilityType
 *
 * @ORM\Table(name="facility_type")
 * @ORM\Entity
 */
class FacilityType
{
    /**
     * @var int
     *
     * @ORM\Column(name="facility_type_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $facilityTypeId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="facility_type_name", type="string", length=255, nullable=true)
     */
    private $facilityTypeName;


}
