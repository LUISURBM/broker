<?php

namespace App\Entity\elab;

use Doctrine\ORM\Mapping as ORM;

/**
 * RSampleRejectionReasons
 *
 * @ORM\Table(name="r_sample_rejection_reasons")
 * @ORM\Entity
 */
class RSampleRejectionReasons
{
    /**
     * @var int
     *
     * @ORM\Column(name="rejection_reason_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $rejectionReasonId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rejection_reason_name", type="string", length=255, nullable=true)
     */
    private $rejectionReasonName;

    /**
     * @var string
     *
     * @ORM\Column(name="rejection_type", type="string", length=255, nullable=false, options={"default"="general"})
     */
    private $rejectionType = 'general';

    /**
     * @var string|null
     *
     * @ORM\Column(name="rejection_reason_status", type="string", length=255, nullable=true)
     */
    private $rejectionReasonStatus;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rejection_reason_code", type="string", length=255, nullable=true)
     */
    private $rejectionReasonCode;

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
