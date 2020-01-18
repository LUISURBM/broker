<?php

namespace App\Entity\elab;

use Doctrine\ORM\Mapping as ORM;

/**
 * RArtCodeDetails
 *
 * @ORM\Table(name="r_art_code_details")
 * @ORM\Entity
 */
class RArtCodeDetails
{
    /**
     * @var int
     *
     * @ORM\Column(name="art_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $artId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="art_code", type="string", length=255, nullable=true)
     */
    private $artCode;

    /**
     * @var int
     *
     * @ORM\Column(name="parent_art", type="integer", nullable=false)
     */
    private $parentArt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="headings", type="string", length=255, nullable=true)
     */
    private $headings;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nation_identifier", type="string", length=255, nullable=true)
     */
    private $nationIdentifier;

    /**
     * @var string
     *
     * @ORM\Column(name="art_status", type="string", length=45, nullable=false, options={"default"="active"})
     */
    private $artStatus = 'active';

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
