<?php

namespace App\Entity\elab;

use Doctrine\ORM\Mapping as ORM;

/**
 * VlFacilityMap
 *
 * @ORM\Table(name="vl_facility_map", indexes={@ORM\Index(name="vl_lab_id", columns={"vl_lab_id"}), @ORM\Index(name="facility_id", columns={"facility_id"})})
 * @ORM\Entity
 */
class VlFacilityMap
{
    /**
     * @var int
     *
     * @ORM\Column(name="facility_map_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $facilityMapId;

    /**
     * @var \FacilityDetails2
     *
     * @ORM\ManyToOne(targetEntity="FacilityDetails2")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vl_lab_id", referencedColumnName="facility_id")
     * })
     */
    private $vlLab;

    /**
     * @var \FacilityDetails2
     *
     * @ORM\ManyToOne(targetEntity="FacilityDetails2")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="facility_id", referencedColumnName="facility_id")
     * })
     */
    private $facility;


}
