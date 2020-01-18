<?php

namespace App\Entity\elab;

use Doctrine\ORM\Mapping as ORM;

/**
 * RSampleType
 *
 * @ORM\Table(name="r_sample_type")
 * @ORM\Entity
 */
class RSampleType
{
    /**
     * @var int
     *
     * @ORM\Column(name="sample_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sampleId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sample_name", type="string", length=255, nullable=true)
     */
    private $sampleName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status", type="string", length=45, nullable=true)
     */
    private $status;

    /**
     * @var int
     *
     * @ORM\Column(name="data_sync", type="integer", nullable=false)
     */
    private $dataSync = '0';


}
