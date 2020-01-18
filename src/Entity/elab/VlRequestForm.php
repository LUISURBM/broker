<?php

namespace App\Entity\elab;

use Doctrine\ORM\Mapping as ORM;

/**
 * VlRequestForm
 *
 * @ORM\Table(name="vl_request_form", uniqueConstraints={@ORM\UniqueConstraint(name="sample_code", columns={"sample_code"})}, indexes={@ORM\Index(name="created_by", columns={"request_created_by"}), @ORM\Index(name="art_no", columns={"patient_art_no"}), @ORM\Index(name="sample_id", columns={"sample_type"}), @ORM\Index(name="status", columns={"result_status"}), @ORM\Index(name="facility_id", columns={"facility_id"})})
 * @ORM\Entity
 */
class VlRequestForm
{
    /**
     * @var int
     *
     * @ORM\Column(name="vl_sample_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $vlSampleId;

    /**
     * @var string
     *
     * @ORM\Column(name="vlsm_instance_id", type="string", length=255, nullable=false)
     */
    private $vlsmInstanceId;

    /**
     * @var int
     *
     * @ORM\Column(name="vlsm_country_id", type="integer", nullable=false, options={"default"="1"})
     */
    private $vlsmCountryId = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="remote_sample_code", type="string", length=255, nullable=true)
     */
    private $remoteSampleCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="serial_no", type="string", length=255, nullable=true)
     */
    private $serialNo;

    /**
     * @var int|null
     *
     * @ORM\Column(name="facility_id", type="integer", nullable=true)
     */
    private $facilityId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="facility_sample_id", type="string", length=255, nullable=true)
     */
    private $facilitySampleId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sample_batch_id", type="string", length=11, nullable=true)
     */
    private $sampleBatchId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sample_package_id", type="string", length=11, nullable=true)
     */
    private $samplePackageId;

    /**
     * @var string
     *
     * @ORM\Column(name="sample_reordered", type="string", length=45, nullable=false, options={"default"="no"})
     */
    private $sampleReordered = 'no';

    /**
     * @var string|null
     *
     * @ORM\Column(name="remote_sample_code_key", type="string", length=255, nullable=true)
     */
    private $remoteSampleCodeKey;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sample_code_key", type="string", length=255, nullable=true)
     */
    private $sampleCodeKey;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sample_code_format", type="string", length=255, nullable=true)
     */
    private $sampleCodeFormat;

    /**
     * @var string
     *
     * @ORM\Column(name="sample_code_title", type="string", length=45, nullable=false, options={"default"="auto"})
     */
    private $sampleCodeTitle = 'auto';

    /**
     * @var string|null
     *
     * @ORM\Column(name="sample_code", type="string", length=255, nullable=true)
     */
    private $sampleCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="test_urgency", type="string", length=255, nullable=true)
     */
    private $testUrgency;

    /**
     * @var string|null
     *
     * @ORM\Column(name="patient_first_name", type="string", length=255, nullable=true)
     */
    private $patientFirstName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="patient_middle_name", type="string", length=255, nullable=true)
     */
    private $patientMiddleName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="patient_last_name", type="string", length=255, nullable=true)
     */
    private $patientLastName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="patient_responsible_person", type="string", length=255, nullable=true)
     */
    private $patientResponsiblePerson;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patient_nationality", type="integer", nullable=true)
     */
    private $patientNationality;

    /**
     * @var string|null
     *
     * @ORM\Column(name="patient_province", type="string", length=255, nullable=true)
     */
    private $patientProvince;

    /**
     * @var string|null
     *
     * @ORM\Column(name="patient_district", type="string", length=255, nullable=true)
     */
    private $patientDistrict;

    /**
     * @var string|null
     *
     * @ORM\Column(name="patient_group", type="string", length=255, nullable=true)
     */
    private $patientGroup;

    /**
     * @var string|null
     *
     * @ORM\Column(name="patient_art_no", type="string", length=255, nullable=true)
     */
    private $patientArtNo;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="patient_dob", type="date", nullable=true)
     */
    private $patientDob;

    /**
     * @var string|null
     *
     * @ORM\Column(name="patient_gender", type="string", length=255, nullable=true)
     */
    private $patientGender;

    /**
     * @var string|null
     *
     * @ORM\Column(name="patient_mobile_number", type="string", length=255, nullable=true)
     */
    private $patientMobileNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="patient_location", type="string", length=255, nullable=true)
     */
    private $patientLocation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="patient_address", type="text", length=65535, nullable=true)
     */
    private $patientAddress;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="patient_art_date", type="date", nullable=true)
     */
    private $patientArtDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="patient_receiving_therapy", type="string", length=255, nullable=true)
     */
    private $patientReceivingTherapy;

    /**
     * @var string|null
     *
     * @ORM\Column(name="patient_drugs_transmission", type="string", length=255, nullable=true)
     */
    private $patientDrugsTransmission;

    /**
     * @var string|null
     *
     * @ORM\Column(name="patient_tb", type="string", length=255, nullable=true)
     */
    private $patientTb;

    /**
     * @var string|null
     *
     * @ORM\Column(name="patient_tb_yes", type="string", length=255, nullable=true)
     */
    private $patientTbYes;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sample_collection_date", type="datetime", nullable=true)
     */
    private $sampleCollectionDate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sample_type", type="integer", nullable=true)
     */
    private $sampleType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="is_patient_new", type="string", length=45, nullable=true)
     */
    private $isPatientNew;

    /**
     * @var string|null
     *
     * @ORM\Column(name="treatment_initiation", type="string", length=255, nullable=true)
     */
    private $treatmentInitiation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="line_of_treatment", type="integer", nullable=true)
     */
    private $lineOfTreatment;

    /**
     * @var string|null
     *
     * @ORM\Column(name="line_of_treatment_ref_type", type="string", length=255, nullable=true)
     */
    private $lineOfTreatmentRefType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="current_regimen", type="string", length=255, nullable=true)
     */
    private $currentRegimen;

    /**
     * @var string|null
     *
     * @ORM\Column(name="date_of_initiation_of_current_regimen", type="string", length=255, nullable=true)
     */
    private $dateOfInitiationOfCurrentRegimen;

    /**
     * @var string|null
     *
     * @ORM\Column(name="is_patient_pregnant", type="string", length=255, nullable=true)
     */
    private $isPatientPregnant;

    /**
     * @var string|null
     *
     * @ORM\Column(name="is_patient_breastfeeding", type="string", length=255, nullable=true)
     */
    private $isPatientBreastfeeding;

    /**
     * @var int|null
     *
     * @ORM\Column(name="pregnancy_trimester", type="integer", nullable=true)
     */
    private $pregnancyTrimester;

    /**
     * @var string|null
     *
     * @ORM\Column(name="arv_adherance_percentage", type="string", length=255, nullable=true)
     */
    private $arvAdherancePercentage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="is_adherance_poor", type="string", length=255, nullable=true)
     */
    private $isAdherancePoor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="consent_to_receive_sms", type="string", length=45, nullable=true)
     */
    private $consentToReceiveSms;

    /**
     * @var string|null
     *
     * @ORM\Column(name="number_of_enhanced_sessions", type="string", length=255, nullable=true)
     */
    private $numberOfEnhancedSessions;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_vl_date_routine", type="date", nullable=true)
     */
    private $lastVlDateRoutine;

    /**
     * @var string|null
     *
     * @ORM\Column(name="last_vl_result_routine", type="string", length=255, nullable=true)
     */
    private $lastVlResultRoutine;

    /**
     * @var int|null
     *
     * @ORM\Column(name="last_vl_sample_type_routine", type="integer", nullable=true)
     */
    private $lastVlSampleTypeRoutine;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_vl_date_failure_ac", type="date", nullable=true)
     */
    private $lastVlDateFailureAc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="last_vl_result_failure_ac", type="string", length=255, nullable=true)
     */
    private $lastVlResultFailureAc;

    /**
     * @var int|null
     *
     * @ORM\Column(name="last_vl_sample_type_failure_ac", type="integer", nullable=true)
     */
    private $lastVlSampleTypeFailureAc;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_vl_date_failure", type="date", nullable=true)
     */
    private $lastVlDateFailure;

    /**
     * @var string|null
     *
     * @ORM\Column(name="last_vl_result_failure", type="string", length=255, nullable=true)
     */
    private $lastVlResultFailure;

    /**
     * @var int|null
     *
     * @ORM\Column(name="last_vl_sample_type_failure", type="integer", nullable=true)
     */
    private $lastVlSampleTypeFailure;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_vl_date_ecd", type="date", nullable=true)
     */
    private $lastVlDateEcd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="last_vl_result_ecd", type="string", length=255, nullable=true)
     */
    private $lastVlResultEcd;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_vl_date_cf", type="date", nullable=true)
     */
    private $lastVlDateCf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="last_vl_result_cf", type="string", length=255, nullable=true)
     */
    private $lastVlResultCf;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_vl_date_if", type="date", nullable=true)
     */
    private $lastVlDateIf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="last_vl_result_if", type="string", length=255, nullable=true)
     */
    private $lastVlResultIf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="request_clinician_name", type="string", length=255, nullable=true)
     */
    private $requestClinicianName;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="test_requested_on", type="date", nullable=true)
     */
    private $testRequestedOn;

    /**
     * @var string|null
     *
     * @ORM\Column(name="request_clinician_phone_number", type="string", length=255, nullable=true)
     */
    private $requestClinicianPhoneNumber;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sample_testing_date", type="datetime", nullable=true)
     */
    private $sampleTestingDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vl_focal_person", type="string", length=255, nullable=true)
     */
    private $vlFocalPerson;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vl_focal_person_phone_number", type="string", length=255, nullable=true)
     */
    private $vlFocalPersonPhoneNumber;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sample_received_at_vl_lab_datetime", type="datetime", nullable=true)
     */
    private $sampleReceivedAtVlLabDatetime;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="result_dispatched_datetime", type="datetime", nullable=true)
     */
    private $resultDispatchedDatetime;

    /**
     * @var string|null
     *
     * @ORM\Column(name="is_sample_rejected", type="string", length=255, nullable=true)
     */
    private $isSampleRejected;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sample_rejection_facility", type="integer", nullable=true)
     */
    private $sampleRejectionFacility;

    /**
     * @var int|null
     *
     * @ORM\Column(name="reason_for_sample_rejection", type="integer", nullable=true)
     */
    private $reasonForSampleRejection;

    /**
     * @var string
     *
     * @ORM\Column(name="request_created_by", type="string", length=255, nullable=false)
     */
    private $requestCreatedBy;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="request_created_datetime", type="datetime", nullable=true)
     */
    private $requestCreatedDatetime;

    /**
     * @var string|null
     *
     * @ORM\Column(name="last_modified_by", type="string", length=255, nullable=true)
     */
    private $lastModifiedBy;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_modified_datetime", type="datetime", nullable=true)
     */
    private $lastModifiedDatetime;

    /**
     * @var string|null
     *
     * @ORM\Column(name="patient_other_id", type="string", length=255, nullable=true)
     */
    private $patientOtherId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="patient_age_in_years", type="string", length=255, nullable=true)
     */
    private $patientAgeInYears;

    /**
     * @var string|null
     *
     * @ORM\Column(name="patient_age_in_months", type="string", length=255, nullable=true)
     */
    private $patientAgeInMonths;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="treatment_initiated_date", type="date", nullable=true)
     */
    private $treatmentInitiatedDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="patient_anc_no", type="string", length=255, nullable=true)
     */
    private $patientAncNo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="treatment_details", type="text", length=65535, nullable=true)
     */
    private $treatmentDetails;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sample_visit_type", type="string", length=45, nullable=true)
     */
    private $sampleVisitType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vl_sample_suspected_treatment_failure_at", type="string", length=255, nullable=true)
     */
    private $vlSampleSuspectedTreatmentFailureAt;

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
     * @var int|null
     *
     * @ORM\Column(name="lab_code", type="integer", nullable=true)
     */
    private $labCode;

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
     * @var \DateTime|null
     *
     * @ORM\Column(name="sample_tested_datetime", type="datetime", nullable=true)
     */
    private $sampleTestedDatetime;

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
     * @ORM\Column(name="approver_comments", type="text", length=65535, nullable=true)
     */
    private $approverComments;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reason_for_vl_result_changes", type="text", length=65535, nullable=true)
     */
    private $reasonForVlResultChanges;

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
     * @ORM\Column(name="result_reviewed_by", type="string", length=255, nullable=true)
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
     * @ORM\Column(name="test_methods", type="string", length=255, nullable=true)
     */
    private $testMethods;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact_complete_status", type="string", length=255, nullable=true)
     */
    private $contactCompleteStatus;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_viral_load_date", type="date", nullable=true)
     */
    private $lastViralLoadDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="last_viral_load_result", type="string", length=255, nullable=true)
     */
    private $lastViralLoadResult;

    /**
     * @var string|null
     *
     * @ORM\Column(name="last_vl_result_in_log", type="string", length=255, nullable=true)
     */
    private $lastVlResultInLog;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reason_for_vl_testing", type="string", length=255, nullable=true)
     */
    private $reasonForVlTesting;

    /**
     * @var string|null
     *
     * @ORM\Column(name="drug_substitution", type="string", length=255, nullable=true)
     */
    private $drugSubstitution;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sample_collected_by", type="string", length=255, nullable=true)
     */
    private $sampleCollectedBy;

    /**
     * @var string|null
     *
     * @ORM\Column(name="facility_comments", type="text", length=65535, nullable=true)
     */
    private $facilityComments;

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
     * @var string|null
     *
     * @ORM\Column(name="facility_support_partner", type="string", length=255, nullable=true)
     */
    private $facilitySupportPartner;

    /**
     * @var string|null
     *
     * @ORM\Column(name="has_patient_changed_regimen", type="string", length=45, nullable=true)
     */
    private $hasPatientChangedRegimen;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reason_for_regimen_change", type="string", length=255, nullable=true)
     */
    private $reasonForRegimenChange;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="regimen_change_date", type="date", nullable=true)
     */
    private $regimenChangeDate;

    /**
     * @var float|null
     *
     * @ORM\Column(name="plasma_conservation_temperature", type="float", precision=10, scale=0, nullable=true)
     */
    private $plasmaConservationTemperature;

    /**
     * @var string|null
     *
     * @ORM\Column(name="plasma_conservation_duration", type="string", length=45, nullable=true)
     */
    private $plasmaConservationDuration;

    /**
     * @var string|null
     *
     * @ORM\Column(name="physician_name", type="string", length=255, nullable=true)
     */
    private $physicianName;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_test_ordered_by_physician", type="date", nullable=true)
     */
    private $dateTestOrderedByPhysician;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vl_test_number", type="string", length=45, nullable=true)
     */
    private $vlTestNumber;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_dispatched_from_clinic_to_lab", type="datetime", nullable=true)
     */
    private $dateDispatchedFromClinicToLab;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="result_printed_datetime", type="datetime", nullable=true)
     */
    private $resultPrintedDatetime;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="result_sms_sent_datetime", type="datetime", nullable=true)
     */
    private $resultSmsSentDatetime;

    /**
     * @var string
     *
     * @ORM\Column(name="is_request_mail_sent", type="string", length=45, nullable=false, options={"default"="no"})
     */
    private $isRequestMailSent = 'no';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="request_mail_datetime", type="datetime", nullable=true)
     */
    private $requestMailDatetime;

    /**
     * @var string
     *
     * @ORM\Column(name="is_result_mail_sent", type="string", length=45, nullable=false, options={"default"="no"})
     */
    private $isResultMailSent = 'no';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="result_mail_datetime", type="datetime", nullable=true)
     */
    private $resultMailDatetime;

    /**
     * @var string
     *
     * @ORM\Column(name="is_result_sms_sent", type="string", length=45, nullable=false, options={"default"="no"})
     */
    private $isResultSmsSent = 'no';

    /**
     * @var int
     *
     * @ORM\Column(name="test_request_export", type="integer", nullable=false)
     */
    private $testRequestExport = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="test_request_import", type="integer", nullable=false)
     */
    private $testRequestImport = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="test_result_export", type="integer", nullable=false)
     */
    private $testResultExport = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="test_result_import", type="integer", nullable=false)
     */
    private $testResultImport = '0';

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
     * @var string|null
     *
     * @ORM\Column(name="import_machine_file_name", type="string", length=255, nullable=true)
     */
    private $importMachineFileName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="manual_result_entry", type="string", length=255, nullable=true)
     */
    private $manualResultEntry;

    /**
     * @var string|null
     *
     * @ORM\Column(name="source", type="string", length=500, nullable=true, options={"default"="manual"})
     */
    private $source = 'manual';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ward", type="string", length=255, nullable=true)
     */
    private $ward;

    /**
     * @var string|null
     *
     * @ORM\Column(name="art_cd_cells", type="string", length=255, nullable=true)
     */
    private $artCdCells;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="art_cd_date", type="date", nullable=true)
     */
    private $artCdDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="who_clinical_stage", type="string", length=255, nullable=true)
     */
    private $whoClinicalStage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reason_testing_png", type="text", length=65535, nullable=true)
     */
    private $reasonTestingPng;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tech_name_png", type="string", length=255, nullable=true)
     */
    private $techNamePng;

    /**
     * @var string|null
     *
     * @ORM\Column(name="qc_tech_name", type="string", length=255, nullable=true)
     */
    private $qcTechName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="qc_tech_sign", type="string", length=255, nullable=true)
     */
    private $qcTechSign;

    /**
     * @var string|null
     *
     * @ORM\Column(name="qc_date", type="string", length=255, nullable=true)
     */
    private $qcDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="whole_blood_ml", type="string", length=50, nullable=true)
     */
    private $wholeBloodMl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="whole_blood_vial", type="string", length=50, nullable=true)
     */
    private $wholeBloodVial;

    /**
     * @var string|null
     *
     * @ORM\Column(name="plasma_ml", type="string", length=50, nullable=true)
     */
    private $plasmaMl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="plasma_vial", type="string", length=50, nullable=true)
     */
    private $plasmaVial;

    /**
     * @var string|null
     *
     * @ORM\Column(name="plasma_process_time", type="string", length=255, nullable=true)
     */
    private $plasmaProcessTime;

    /**
     * @var string|null
     *
     * @ORM\Column(name="plasma_process_tech", type="string", length=255, nullable=true)
     */
    private $plasmaProcessTech;

    /**
     * @var string|null
     *
     * @ORM\Column(name="batch_quality", type="string", length=255, nullable=true)
     */
    private $batchQuality;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sample_test_quality", type="string", length=255, nullable=true)
     */
    private $sampleTestQuality;

    /**
     * @var string|null
     *
     * @ORM\Column(name="repeat_sample_collection", type="string", length=45, nullable=true)
     */
    private $repeatSampleCollection;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="failed_test_date", type="datetime", nullable=true)
     */
    private $failedTestDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="failed_test_tech", type="string", length=255, nullable=true)
     */
    private $failedTestTech;

    /**
     * @var string|null
     *
     * @ORM\Column(name="failed_vl_result", type="string", length=255, nullable=true)
     */
    private $failedVlResult;

    /**
     * @var string|null
     *
     * @ORM\Column(name="failed_batch_quality", type="string", length=255, nullable=true)
     */
    private $failedBatchQuality;

    /**
     * @var string|null
     *
     * @ORM\Column(name="failed_sample_test_quality", type="string", length=255, nullable=true)
     */
    private $failedSampleTestQuality;

    /**
     * @var string|null
     *
     * @ORM\Column(name="failed_batch_id", type="string", length=255, nullable=true)
     */
    private $failedBatchId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="clinic_date", type="date", nullable=true)
     */
    private $clinicDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="report_date", type="date", nullable=true)
     */
    private $reportDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sample_to_transport", type="string", length=255, nullable=true)
     */
    private $sampleToTransport;

    /**
     * @var string|null
     *
     * @ORM\Column(name="requesting_professional_number", type="string", length=255, nullable=true)
     */
    private $requestingProfessionalNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="requesting_category", type="string", length=255, nullable=true)
     */
    private $requestingCategory;

    /**
     * @var string|null
     *
     * @ORM\Column(name="requesting_vl_service_sector", type="string", length=255, nullable=true)
     */
    private $requestingVlServiceSector;

    /**
     * @var int|null
     *
     * @ORM\Column(name="requesting_facility_id", type="integer", nullable=true)
     */
    private $requestingFacilityId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="requesting_person", type="string", length=255, nullable=true)
     */
    private $requestingPerson;

    /**
     * @var string|null
     *
     * @ORM\Column(name="requesting_phone", type="string", length=255, nullable=true)
     */
    private $requestingPhone;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="requesting_date", type="date", nullable=true)
     */
    private $requestingDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="collection_site", type="string", length=255, nullable=true)
     */
    private $collectionSite;

    /**
     * @var string
     *
     * @ORM\Column(name="data_sync", type="string", length=10, nullable=false)
     */
    private $dataSync = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="remote_sample", type="string", length=255, nullable=false, options={"default"="no"})
     */
    private $remoteSample = 'no';

    /**
     * @var int|null
     *
     * @ORM\Column(name="picked_by", type="integer", nullable=true)
     */
    private $pickedBy;

    /**
     * @var \RSampleStatus
     *
     * @ORM\ManyToOne(targetEntity="RSampleStatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="result_status", referencedColumnName="status_id")
     * })
     */
    private $resultStatus;


}
