<?php

namespace App\Entity\elab;

use Doctrine\ORM\Mapping as ORM;

/**
 * RVlTestReasons
 *
 * @ORM\Table(name="r_vl_test_reasons")
 * @ORM\Entity
 */
class RVlTestReasons
{
    /**
     * @var int
     *
     * @ORM\Column(name="test_reason_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $testReasonId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="test_reason_name", type="string", length=255, nullable=true)
     */
    private $testReasonName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="test_reason_status", type="string", length=45, nullable=true)
     */
    private $testReasonStatus;


}
