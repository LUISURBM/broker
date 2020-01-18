<?php

namespace App\Entity\elab;

use Doctrine\ORM\Mapping as ORM;

/**
 * TempSampleImport
 *
 * @ORM\Table(name="temp_sample_import")
 * @ORM\Entity
 */
class TempSampleImport
{
    /**
     * @var int
     *
     * @ORM\Column(name="temp_sample_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tempSampleId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="facility_id", type="integer", nullable=true)
     */
    private $facilityId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lab_name", type="string", length=255, nullable=true)
     */
    private $labName;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lab_id", type="integer", nullable=true)
     */
    private $labId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lab_contact_person", type="string", length=255, nullable=true)
     */
    private $labContactPerson;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lab_phone_number", type="string", length=255, nullable=true)
     */
    private $labPhoneNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sample_received_at_vl_lab_datetime", type="string", length=255, nullable=true)
     */
    private $sampleReceivedAtVlLabDatetime;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sample_tested_datetime", type="string", length=255, nullable=true)
     */
    private $sampleTestedDatetime;

    /**
     * @var string|null
     *
     * @ORM\Column(name="result_dispatched_datetime", type="string", length=255, nullable=true)
     */
    private $resultDispatchedDatetime;

    /**
     * @var string|null
     *
     * @ORM\Column(name="result_reviewed_datetime", type="string", length=255, nullable=true)
     */
    private $resultReviewedDatetime;

    /**
     * @var string|null
     *
     * @ORM\Column(name="result_reviewed_by", type="string", length=255, nullable=true)
     */
    private $resultReviewedBy;

    /**
     * @var string|null
     *
     * @ORM\Column(name="approver_comments", type="string", length=255, nullable=true)
     */
    private $approverComments;

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
     * @var string|null
     *
     * @ORM\Column(name="sample_code", type="string", length=255, nullable=true)
     */
    private $sampleCode;

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
     * @var string|null
     *
     * @ORM\Column(name="sample_type", type="string", length=255, nullable=true)
     */
    private $sampleType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="order_number", type="string", length=255, nullable=true)
     */
    private $orderNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="result_value_log", type="string", length=255, nullable=true)
     */
    private $resultValueLog;

    /**
     * @var string|null
     *
     * @ORM\Column(name="result_value_absolute", type="string", length=255, nullable=true)
     */
    private $resultValueAbsolute;

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
     * @ORM\Column(name="sample_details", type="string", length=255, nullable=true)
     */
    private $sampleDetails;

    /**
     * @var string|null
     *
     * @ORM\Column(name="result_status", type="string", length=255, nullable=true)
     */
    private $resultStatus;

    /**
     * @var string|null
     *
     * @ORM\Column(name="import_machine_file_name", type="string", length=255, nullable=true)
     */
    private $importMachineFileName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vl_test_platform", type="string", length=255, nullable=true)
     */
    private $vlTestPlatform;

    /**
     * @var int|null
     *
     * @ORM\Column(name="import_machine_name", type="integer", nullable=true)
     */
    private $importMachineName;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="request_exported_datetime", type="datetime", nullable=true)
     */
    private $requestExportedDatetime;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="request_imported_datetime", type="datetime", nullable=true)
     */
    private $requestImportedDatetime;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="result_exported_datetime", type="datetime", nullable=true)
     */
    private $resultExportedDatetime;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="result_imported_datetime", type="datetime", nullable=true)
     */
    private $resultImportedDatetime;

    /**
     * @var int
     *
     * @ORM\Column(name="temp_sample_status", type="integer", nullable=false)
     */
    private $tempSampleStatus = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="sample_review_by", type="string", length=10, nullable=true)
     */
    private $sampleReviewBy;


}
