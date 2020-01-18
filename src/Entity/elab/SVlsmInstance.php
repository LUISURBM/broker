<?php

namespace App\Entity\elab;

use Doctrine\ORM\Mapping as ORM;

/**
 * SVlsmInstance
 *
 * @ORM\Table(name="s_vlsm_instance", uniqueConstraints={@ORM\UniqueConstraint(name="vl_instance_id", columns={"vlsm_instance_id"})})
 * @ORM\Entity
 */
class SVlsmInstance
{
    /**
     * @var string
     *
     * @ORM\Id
     * @ORM\Column(name="vlsm_instance_id", type="string", length=255, nullable=false)
     */
    private $vlsmInstanceId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="instance_facility_name", type="string", length=255, nullable=true)
     */
    private $instanceFacilityName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="instance_facility_code", type="string", length=255, nullable=true)
     */
    private $instanceFacilityCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="instance_facility_type", type="string", length=255, nullable=true)
     */
    private $instanceFacilityType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="instance_facility_logo", type="string", length=255, nullable=true)
     */
    private $instanceFacilityLogo;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="instance_added_on", type="datetime", nullable=true)
     */
    private $instanceAddedOn;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="instance_update_on", type="datetime", nullable=true)
     */
    private $instanceUpdateOn;

    /**
     * @var string|null
     *
     * @ORM\Column(name="instance_mac_address", type="string", length=255, nullable=true)
     */
    private $instanceMacAddress;


}
