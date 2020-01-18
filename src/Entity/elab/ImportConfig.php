<?php

namespace App\Entity\elab;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImportConfig
 *
 * @ORM\Table(name="import_config")
 * @ORM\Entity
 */
class ImportConfig
{
    /**
     * @var int
     *
     * @ORM\Column(name="config_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $configId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="machine_name", type="string", length=255, nullable=true)
     */
    private $machineName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="import_machine_file_name", type="string", length=255, nullable=true)
     */
    private $importMachineFileName;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lower_limit", type="integer", nullable=true)
     */
    private $lowerLimit;

    /**
     * @var int|null
     *
     * @ORM\Column(name="higher_limit", type="integer", nullable=true)
     */
    private $higherLimit;

    /**
     * @var int
     *
     * @ORM\Column(name="max_no_of_samples_in_a_batch", type="integer", nullable=false)
     */
    private $maxNoOfSamplesInABatch;

    /**
     * @var int|null
     *
     * @ORM\Column(name="number_of_in_house_controls", type="integer", nullable=true)
     */
    private $numberOfInHouseControls;

    /**
     * @var int|null
     *
     * @ORM\Column(name="number_of_manufacturer_controls", type="integer", nullable=true)
     */
    private $numberOfManufacturerControls;

    /**
     * @var int|null
     *
     * @ORM\Column(name="number_of_calibrators", type="integer", nullable=true)
     */
    private $numberOfCalibrators;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=45, nullable=false, options={"default"="active"})
     */
    private $status = 'active';


}
