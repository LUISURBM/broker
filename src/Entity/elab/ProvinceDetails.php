<?php

namespace App\Entity\elab;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProvinceDetails
 *
 * @ORM\Table(name="province_details")
 * @ORM\Entity
 */
class ProvinceDetails
{
    /**
     * @var int
     *
     * @ORM\Column(name="province_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $provinceId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="province_name", type="string", length=255, nullable=true)
     */
    private $provinceName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="province_code", type="string", length=255, nullable=true)
     */
    private $provinceCode;

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
