<?php

namespace App\Entity\elab;

use Doctrine\ORM\Mapping as ORM;

/**
 * Physicians
 *
 * @ORM\Table(name="physicians")
 * @ORM\Entity
 */
class Physicians
{
    /**
     * @var int
     *
     * @ORM\Column(name="physician_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $physicianId;

    /**
     * @var string
     *
     * @ORM\Column(name="physician_name", type="string", length=225, nullable=false)
     */
    private $physicianName;

    /**
     * @var string
     *
     * @ORM\Column(name="physician_email", type="string", length=225, nullable=false)
     */
    private $physicianEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="physician_phone", type="string", length=15, nullable=false)
     */
    private $physicianPhone;

    /**
     * @var int
     *
     * @ORM\Column(name="physician_site", type="integer", nullable=false)
     */
    private $physicianSite;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=15, nullable=false, options={"default"="active"})
     */
    private $status = 'active';


}
