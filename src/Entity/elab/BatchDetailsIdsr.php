<?php

namespace App\Entity\elab;

use Doctrine\ORM\Mapping as ORM;

/**
 * BatchDetailsIdsr
 *
 * @ORM\Table(name="batch_details_idsr")
 * @ORM\Entity
 */
class BatchDetailsIdsr
{
    /**
     * @var int
     *
     * @ORM\Column(name="batch_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $batchId;

    /**
     * @var int
     *
     * @ORM\Column(name="machine", type="integer", nullable=false)
     */
    private $machine;

    /**
     * @var string|null
     *
     * @ORM\Column(name="batch_code", type="string", length=255, nullable=true)
     */
    private $batchCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="batch_code_key", type="string", length=255, nullable=true)
     */
    private $batchCodeKey;

    /**
     * @var string
     *
     * @ORM\Column(name="batch_status", type="string", length=255, nullable=false, options={"default"="completed"})
     */
    private $batchStatus = 'completed';

    /**
     * @var string
     *
     * @ORM\Column(name="sent_mail", type="string", length=100, nullable=false, options={"default"="no"})
     */
    private $sentMail = 'no';

    /**
     * @var string|null
     *
     * @ORM\Column(name="label_order", type="text", length=65535, nullable=true)
     */
    private $labelOrder;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="request_created_datetime", type="datetime", nullable=false)
     */
    private $requestCreatedDatetime;

    /**
     * @var int
     *
     * @ORM\Column(name="post_notifies", type="integer", nullable=false)
     */
    private $postNotifies = '0';


}
