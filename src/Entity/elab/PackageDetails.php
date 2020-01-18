<?php

namespace App\Entity\elab;

use Doctrine\ORM\Mapping as ORM;

/**
 * PackageDetails
 *
 * @ORM\Table(name="package_details")
 * @ORM\Entity
 */
class PackageDetails
{
    /**
     * @var int
     *
     * @ORM\Column(name="package_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $packageId;

    /**
     * @var string
     *
     * @ORM\Column(name="package_code", type="string", length=255, nullable=false)
     */
    private $packageCode;

    /**
     * @var string
     *
     * @ORM\Column(name="added_by", type="string", length=255, nullable=false)
     */
    private $addedBy;

    /**
     * @var string|null
     *
     * @ORM\Column(name="package_status", type="string", length=255, nullable=true)
     */
    private $packageStatus;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="request_created_datetime", type="datetime", nullable=true)
     */
    private $requestCreatedDatetime;


}
