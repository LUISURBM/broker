<?php

namespace App\Entity\elab;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActivityLog
 *
 * @ORM\Table(name="activity_log")
 * @ORM\Entity
 */
class ActivityLog
{
    /**
     * @var int
     *
     * @ORM\Column(name="log_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $logId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="event_type", type="string", length=255, nullable=true)
     */
    private $eventType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="action", type="string", length=255, nullable=true)
     */
    private $action;

    /**
     * @var string|null
     *
     * @ORM\Column(name="resource", type="string", length=255, nullable=true)
     */
    private $resource;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_time", type="datetime", nullable=true)
     */
    private $dateTime;


}
