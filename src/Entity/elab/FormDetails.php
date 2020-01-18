<?php

namespace App\Entity\elab;

use Doctrine\ORM\Mapping as ORM;

/**
 * FormDetails
 *
 * @ORM\Table(name="form_details")
 * @ORM\Entity
 */
class FormDetails
{
    /**
     * @var int
     *
     * @ORM\Column(name="vlsm_country_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $vlsmCountryId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="form_name", type="string", length=255, nullable=true)
     */
    private $formName;


}
