<?php

namespace App\Entity\elab;

use Doctrine\ORM\Mapping as ORM;

/**
 * VlImportedControls
 *
 * @ORM\Table(name="vl_imported_controls")
 * @ORM\Entity
 */
class VlImportedControls
{
    /**
     * @var int
     *
     * @ORM\Column(name="control_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $controlId;

    /**
     * @var string
     *
     * @ORM\Column(name="control_code", type="string", length=255, nullable=false)
     */
    private $controlCode;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lab_id", type="integer", nullable=true)
     */
    private $labId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="batch_id", type="integer", nullable=true)
     */
    private $batchId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="control_type", type="string", length=255, nullable=true)
     */
    private $controlType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lot_number", type="string", length=255, nullable=true)
     */
    private $lotNumber;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="lot_expiration_date", type="date", nullable=true)
     */
    private $lotExpirationDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sample_tested_datetime", type="datetime", nullable=true)
     */
    private $sampleTestedDatetime;

    /**
     * @var string|null
     *
     * @ORM\Column(name="is_sample_rejected", type="string", length=255, nullable=true)
     */
    private $isSampleRejected;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reason_for_sample_rejection", type="string", length=255, nullable=true)
     */
    private $reasonForSampleRejection;

    /**
     * @var string|null
     *
     * @ORM\Column(name="result_value_absolute", type="string", length=255, nullable=true)
     */
    private $resultValueAbsolute;

    /**
     * @var string|null
     *
     * @ORM\Column(name="result_value_log", type="string", length=255, nullable=true)
     */
    private $resultValueLog;

    /**
     * @var string|null
     *
     * @ORM\Column(name="result_value_text", type="string", length=255, nullable=true)
     */
    private $resultValueText;

    /**
     * @var string|null
     *
     * @ORM\Column(name="result_value_absolute_decimal", type="string", length=255, nullable=true)
     */
    private $resultValueAbsoluteDecimal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="result", type="string", length=255, nullable=true)
     */
    private $result;

    /**
     * @var string|null
     *
     * @ORM\Column(name="approver_comments", type="string", length=255, nullable=true)
     */
    private $approverComments;

    /**
     * @var string|null
     *
     * @ORM\Column(name="result_approved_by", type="string", length=255, nullable=true)
     */
    private $resultApprovedBy;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="result_approved_datetime", type="datetime", nullable=true)
     */
    private $resultApprovedDatetime;

    /**
     * @var string|null
     *
     * @ORM\Column(name="result_reviewed_by", type="string", length=15, nullable=true)
     */
    private $resultReviewedBy;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="result_reviewed_datetime", type="datetime", nullable=true)
     */
    private $resultReviewedDatetime;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=true)
     */
    private $status;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vlsm_country_id", type="string", length=10, nullable=true)
     */
    private $vlsmCountryId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="file_name", type="string", length=255, nullable=true)
     */
    private $fileName;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="imported_date_time", type="datetime", nullable=true)
     */
    private $importedDateTime;


}
