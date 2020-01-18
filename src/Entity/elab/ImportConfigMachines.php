<?php

namespace App\Entity\elab;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImportConfigMachines
 *
 * @ORM\Table(name="import_config_machines")
 * @ORM\Entity
 */
class ImportConfigMachines
{
    /**
     * @var int
     *
     * @ORM\Column(name="config_machine_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $configMachineId;

    /**
     * @var int
     *
     * @ORM\Column(name="config_id", type="integer", nullable=false)
     */
    private $configId;

    /**
     * @var string
     *
     * @ORM\Column(name="config_machine_name", type="string", length=255, nullable=false)
     */
    private $configMachineName;


}
