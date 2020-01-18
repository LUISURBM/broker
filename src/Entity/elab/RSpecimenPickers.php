<?php

namespace App\Entity\elab;

use Doctrine\ORM\Mapping as ORM;

/**
 * RSpecimenPickers
 *
 * @ORM\Table(name="r_specimen_pickers")
 * @ORM\Entity
 */
class RSpecimenPickers
{
    /**
     * @var int
     *
     * @ORM\Column(name="picker_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pickerId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="picker_name", type="string", length=255, nullable=true)
     */
    private $pickerName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status", type="string", length=45, nullable=true)
     */
    private $status;

    /**
     * @var int
     *
     * @ORM\Column(name="site", type="integer", nullable=false)
     */
    private $site = '0';


}
