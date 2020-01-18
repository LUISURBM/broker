<?php

namespace App\Entity\elab;

use Doctrine\ORM\Mapping as ORM;

/**
 * FacilityDetails
 *
 * @ORM\Table(name="facility_details")
 * @ORM\Entity
 */
class FacilityDetails
{
    /**
     * @var int
     *
     * @ORM\Column(name="facility_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $facilityId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="facility_name", type="string", length=255, nullable=true)
     */
    private $facilityName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="facility_code", type="string", length=255, nullable=true)
     */
    private $facilityCode;

    /**
     * @var string
     *
     * @ORM\Column(name="vlsm_instance_id", type="string", length=255, nullable=false)
     */
    private $vlsmInstanceId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="other_id", type="string", length=255, nullable=true)
     */
    private $otherId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="facility_emails", type="string", length=255, nullable=true)
     */
    private $facilityEmails;

    /**
     * @var string|null
     *
     * @ORM\Column(name="report_email", type="text", length=65535, nullable=true)
     */
    private $reportEmail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact_person", type="string", length=255, nullable=true)
     */
    private $contactPerson;

    /**
     * @var string|null
     *
     * @ORM\Column(name="facility_mobile_numbers", type="string", length=255, nullable=true)
     */
    private $facilityMobileNumbers;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=true)
     */
    private $address;

    /**
     * @var string|null
     *
     * @ORM\Column(name="country", type="string", length=255, nullable=true)
     */
    private $country;

    /**
     * @var string|null
     *
     * @ORM\Column(name="facility_state", type="string", length=255, nullable=true)
     */
    private $facilityState;

    /**
     * @var string|null
     *
     * @ORM\Column(name="facility_district", type="string", length=255, nullable=true)
     */
    private $facilityDistrict;

    /**
     * @var string|null
     *
     * @ORM\Column(name="facility_hub_name", type="string", length=255, nullable=true)
     */
    private $facilityHubName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="latitude", type="string", length=255, nullable=true)
     */
    private $latitude;

    /**
     * @var string|null
     *
     * @ORM\Column(name="longitude", type="string", length=255, nullable=true)
     */
    private $longitude;

    /**
     * @var int|null
     *
     * @ORM\Column(name="facility_type", type="integer", nullable=true)
     */
    private $facilityType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=true)
     */
    private $status;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_datetime", type="datetime", nullable=true)
     */
    private $updatedDatetime;

    /**
     * @var int
     *
     * @ORM\Column(name="data_sync", type="integer", nullable=false)
     */
    private $dataSync = '0';


}
