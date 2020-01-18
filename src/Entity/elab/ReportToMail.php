<?php

namespace App\Entity\elab;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReportToMail
 *
 * @ORM\Table(name="report_to_mail", indexes={@ORM\Index(name="batch_id", columns={"batch_id"})})
 * @ORM\Entity
 */
class ReportToMail
{
    /**
     * @var int
     *
     * @ORM\Column(name="report_mail_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $reportMailId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="subject", type="string", length=255, nullable=true)
     */
    private $subject;

    /**
     * @var string|null
     *
     * @ORM\Column(name="to_mail", type="string", length=255, nullable=true)
     */
    private $toMail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="encrypt", type="string", length=255, nullable=true)
     */
    private $encrypt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=true)
     */
    private $password;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=true)
     */
    private $comment;

    /**
     * @var \BatchDetails
     *
     * @ORM\ManyToOne(targetEntity="BatchDetails")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="batch_id", referencedColumnName="batch_id")
     * })
     */
    private $batch;


}
