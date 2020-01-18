<?php

namespace App\Entity\elab;

use Doctrine\ORM\Mapping as ORM;

/**
 * Diseases
 *
 * @ORM\Table(name="diseases")
 * @ORM\Entity
 */
class Diseases
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
     * @ORM\Column(name="dname", type="string", length=50, nullable=false)
     */
    private $dname;


}
