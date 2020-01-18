<?php

namespace App\Entity\elab;

use Doctrine\ORM\Mapping as ORM;

/**
 * AppsCountries
 *
 * @ORM\Table(name="apps_countries")
 * @ORM\Entity
 */
class AppsCountries
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="country_code", type="string", length=2, nullable=false)
     */
    private $countryCode = '';

    /**
     * @var string
     *
     * @ORM\Column(name="country_name", type="string", length=100, nullable=false)
     */
    private $countryName = '';


}
