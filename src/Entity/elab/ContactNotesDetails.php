<?php

namespace App\Entity\elab;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContactNotesDetails
 *
 * @ORM\Table(name="contact_notes_details", indexes={@ORM\Index(name="treament_contact_id", columns={"treament_contact_id"})})
 * @ORM\Entity
 */
class ContactNotesDetails
{
    /**
     * @var int
     *
     * @ORM\Column(name="contact_notes_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contactNotesId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact_notes", type="text", length=65535, nullable=true)
     */
    private $contactNotes;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="collected_on", type="date", nullable=true)
     */
    private $collectedOn;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="added_on", type="datetime", nullable=true)
     */
    private $addedOn;

    /**
     * @var \VlRequestForm
     *
     * @ORM\ManyToOne(targetEntity="VlRequestForm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="treament_contact_id", referencedColumnName="vl_sample_id")
     * })
     */
    private $treamentContact;


}
