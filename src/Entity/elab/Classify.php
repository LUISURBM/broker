<?php

namespace App\Entity\elab;

use Doctrine\ORM\Mapping as ORM;

/**
 * Classify
 *
 * @ORM\Table(name="classify")
 * @ORM\Entity
 */
class Classify
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="cname", type="string", length=50, nullable=false)
     */
    private $cname;


}
