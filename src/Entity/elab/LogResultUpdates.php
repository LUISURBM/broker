<?php

namespace App\Entity\elab;

use Doctrine\ORM\Mapping as ORM;

/**
 * LogResultUpdates
 *
 * @ORM\Table(name="log_result_updates")
 * @ORM\Entity
 */
class LogResultUpdates
{
    /**
     * @var int
     *
     * @ORM\Column(name="result_log_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $resultLogId;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var int
     *
     * @ORM\Column(name="vl_sample_id", type="integer", nullable=false)
     */
    private $vlSampleId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_on", type="datetime", nullable=true)
     */
    private $updatedOn;


}
