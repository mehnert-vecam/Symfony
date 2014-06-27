<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VaDatum
 *
 * @ORM\Table(name="va_datum")
 * @ORM\Entity
 */
class VaDatum
{
    /**
     * @var string
     *
     * @ORM\Column(name="veranstaltung_tag", type="string", length=255, nullable=false)
     */
    private $veranstaltungTag;

    /**
     * @var integer
     *
     * @ORM\Column(name="veranstalter_kontakt_id", type="integer", nullable=false)
     */
    private $veranstalterKontaktId;

    /**
     * @var integer
     *
     * @ORM\Column(name="veranstaltungsort_kontakt_id", type="integer", nullable=true)
     */
    private $veranstaltungsortKontaktId;

    /**
     * @var integer
     *
     * @ORM\Column(name="moderator_person_id", type="bigint", nullable=false)
     */
    private $moderatorPersonId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datum_start", type="datetime", nullable=true)
     */
    private $datumStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datum_ende", type="datetime", nullable=true)
     */
    private $datumEnde;

    /**
     * @var string
     *
     * @ORM\Column(name="datum_dauer", type="text", nullable=false)
     */
    private $datumDauer;

    /**
     * @var float
     *
     * @ORM\Column(name="datum_preis", type="float", precision=10, scale=0, nullable=false)
     */
    private $datumPreis;

    /**
     * @var float
     *
     * @ORM\Column(name="datum_mwst", type="float", precision=10, scale=0, nullable=false)
     */
    private $datumMwst;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datum_frist", type="datetime", nullable=false)
     */
    private $datumFrist;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datum_storno", type="datetime", nullable=false)
     */
    private $datumStorno;

    /**
     * @var integer
     *
     * @ORM\Column(name="datum_frist_tage", type="integer", nullable=false)
     */
    private $datumFristTage;

    /**
     * @var integer
     *
     * @ORM\Column(name="datum_frist_stunden", type="integer", nullable=false)
     */
    private $datumFristStunden;

    /**
     * @var integer
     *
     * @ORM\Column(name="datum_storno_tage", type="integer", nullable=false)
     */
    private $datumStornoTage;

    /**
     * @var integer
     *
     * @ORM\Column(name="datum_storno_stunden", type="integer", nullable=false)
     */
    private $datumStornoStunden;

    /**
     * @var integer
     *
     * @ORM\Column(name="datum_status", type="integer", nullable=false)
     */
    private $datumStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="datum_nviewer", type="string", length=100, nullable=false)
     */
    private $datumNviewer;

    /**
     * @var integer
     *
     * @ORM\Column(name="datum_report", type="integer", nullable=false)
     */
    private $datumReport;

    /**
     * @var integer
     *
     * @ORM\Column(name="datum_started", type="integer", nullable=false)
     */
    private $datumStarted;

    /**
     * @var integer
     *
     * @ORM\Column(name="datum_addvisits", type="integer", nullable=false)
     */
    private $datumAddvisits;

    /**
     * @var integer
     *
     * @ORM\Column(name="datum_use_account", type="integer", nullable=false)
     */
    private $datumUseAccount;

    /**
     * @var integer
     *
     * @ORM\Column(name="datum_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $datumId;



    /**
     * Set veranstaltungTag
     *
     * @param string $veranstaltungTag
     * @return VaDatum
     */
    public function setVeranstaltungTag($veranstaltungTag)
    {
        $this->veranstaltungTag = $veranstaltungTag;

        return $this;
    }

    /**
     * Get veranstaltungTag
     *
     * @return string 
     */
    public function getVeranstaltungTag()
    {
        return $this->veranstaltungTag;
    }

    /**
     * Set veranstalterKontaktId
     *
     * @param integer $veranstalterKontaktId
     * @return VaDatum
     */
    public function setVeranstalterKontaktId($veranstalterKontaktId)
    {
        $this->veranstalterKontaktId = $veranstalterKontaktId;

        return $this;
    }

    /**
     * Get veranstalterKontaktId
     *
     * @return integer 
     */
    public function getVeranstalterKontaktId()
    {
        return $this->veranstalterKontaktId;
    }

    /**
     * Set veranstaltungsortKontaktId
     *
     * @param integer $veranstaltungsortKontaktId
     * @return VaDatum
     */
    public function setVeranstaltungsortKontaktId($veranstaltungsortKontaktId)
    {
        $this->veranstaltungsortKontaktId = $veranstaltungsortKontaktId;

        return $this;
    }

    /**
     * Get veranstaltungsortKontaktId
     *
     * @return integer 
     */
    public function getVeranstaltungsortKontaktId()
    {
        return $this->veranstaltungsortKontaktId;
    }

    /**
     * Set moderatorPersonId
     *
     * @param integer $moderatorPersonId
     * @return VaDatum
     */
    public function setModeratorPersonId($moderatorPersonId)
    {
        $this->moderatorPersonId = $moderatorPersonId;

        return $this;
    }

    /**
     * Get moderatorPersonId
     *
     * @return integer 
     */
    public function getModeratorPersonId()
    {
        return $this->moderatorPersonId;
    }

    /**
     * Set datumStart
     *
     * @param \DateTime $datumStart
     * @return VaDatum
     */
    public function setDatumStart($datumStart)
    {
        $this->datumStart = $datumStart;

        return $this;
    }

    /**
     * Get datumStart
     *
     * @return \DateTime 
     */
    public function getDatumStart()
    {
        return $this->datumStart;
    }

    /**
     * Set datumEnde
     *
     * @param \DateTime $datumEnde
     * @return VaDatum
     */
    public function setDatumEnde($datumEnde)
    {
        $this->datumEnde = $datumEnde;

        return $this;
    }

    /**
     * Get datumEnde
     *
     * @return \DateTime 
     */
    public function getDatumEnde()
    {
        return $this->datumEnde;
    }

    /**
     * Set datumDauer
     *
     * @param string $datumDauer
     * @return VaDatum
     */
    public function setDatumDauer($datumDauer)
    {
        $this->datumDauer = $datumDauer;

        return $this;
    }

    /**
     * Get datumDauer
     *
     * @return string 
     */
    public function getDatumDauer()
    {
        return $this->datumDauer;
    }

    /**
     * Set datumPreis
     *
     * @param float $datumPreis
     * @return VaDatum
     */
    public function setDatumPreis($datumPreis)
    {
        $this->datumPreis = $datumPreis;

        return $this;
    }

    /**
     * Get datumPreis
     *
     * @return float 
     */
    public function getDatumPreis()
    {
        return $this->datumPreis;
    }

    /**
     * Set datumMwst
     *
     * @param float $datumMwst
     * @return VaDatum
     */
    public function setDatumMwst($datumMwst)
    {
        $this->datumMwst = $datumMwst;

        return $this;
    }

    /**
     * Get datumMwst
     *
     * @return float 
     */
    public function getDatumMwst()
    {
        return $this->datumMwst;
    }

    /**
     * Set datumFrist
     *
     * @param \DateTime $datumFrist
     * @return VaDatum
     */
    public function setDatumFrist($datumFrist)
    {
        $this->datumFrist = $datumFrist;

        return $this;
    }

    /**
     * Get datumFrist
     *
     * @return \DateTime 
     */
    public function getDatumFrist()
    {
        return $this->datumFrist;
    }

    /**
     * Set datumStorno
     *
     * @param \DateTime $datumStorno
     * @return VaDatum
     */
    public function setDatumStorno($datumStorno)
    {
        $this->datumStorno = $datumStorno;

        return $this;
    }

    /**
     * Get datumStorno
     *
     * @return \DateTime 
     */
    public function getDatumStorno()
    {
        return $this->datumStorno;
    }

    /**
     * Set datumFristTage
     *
     * @param integer $datumFristTage
     * @return VaDatum
     */
    public function setDatumFristTage($datumFristTage)
    {
        $this->datumFristTage = $datumFristTage;

        return $this;
    }

    /**
     * Get datumFristTage
     *
     * @return integer 
     */
    public function getDatumFristTage()
    {
        return $this->datumFristTage;
    }

    /**
     * Set datumFristStunden
     *
     * @param integer $datumFristStunden
     * @return VaDatum
     */
    public function setDatumFristStunden($datumFristStunden)
    {
        $this->datumFristStunden = $datumFristStunden;

        return $this;
    }

    /**
     * Get datumFristStunden
     *
     * @return integer 
     */
    public function getDatumFristStunden()
    {
        return $this->datumFristStunden;
    }

    /**
     * Set datumStornoTage
     *
     * @param integer $datumStornoTage
     * @return VaDatum
     */
    public function setDatumStornoTage($datumStornoTage)
    {
        $this->datumStornoTage = $datumStornoTage;

        return $this;
    }

    /**
     * Get datumStornoTage
     *
     * @return integer 
     */
    public function getDatumStornoTage()
    {
        return $this->datumStornoTage;
    }

    /**
     * Set datumStornoStunden
     *
     * @param integer $datumStornoStunden
     * @return VaDatum
     */
    public function setDatumStornoStunden($datumStornoStunden)
    {
        $this->datumStornoStunden = $datumStornoStunden;

        return $this;
    }

    /**
     * Get datumStornoStunden
     *
     * @return integer 
     */
    public function getDatumStornoStunden()
    {
        return $this->datumStornoStunden;
    }

    /**
     * Set datumStatus
     *
     * @param integer $datumStatus
     * @return VaDatum
     */
    public function setDatumStatus($datumStatus)
    {
        $this->datumStatus = $datumStatus;

        return $this;
    }

    /**
     * Get datumStatus
     *
     * @return integer 
     */
    public function getDatumStatus()
    {
        return $this->datumStatus;
    }

    /**
     * Set datumNviewer
     *
     * @param string $datumNviewer
     * @return VaDatum
     */
    public function setDatumNviewer($datumNviewer)
    {
        $this->datumNviewer = $datumNviewer;

        return $this;
    }

    /**
     * Get datumNviewer
     *
     * @return string 
     */
    public function getDatumNviewer()
    {
        return $this->datumNviewer;
    }

    /**
     * Set datumReport
     *
     * @param integer $datumReport
     * @return VaDatum
     */
    public function setDatumReport($datumReport)
    {
        $this->datumReport = $datumReport;

        return $this;
    }

    /**
     * Get datumReport
     *
     * @return integer 
     */
    public function getDatumReport()
    {
        return $this->datumReport;
    }

    /**
     * Set datumStarted
     *
     * @param integer $datumStarted
     * @return VaDatum
     */
    public function setDatumStarted($datumStarted)
    {
        $this->datumStarted = $datumStarted;

        return $this;
    }

    /**
     * Get datumStarted
     *
     * @return integer 
     */
    public function getDatumStarted()
    {
        return $this->datumStarted;
    }

    /**
     * Set datumAddvisits
     *
     * @param integer $datumAddvisits
     * @return VaDatum
     */
    public function setDatumAddvisits($datumAddvisits)
    {
        $this->datumAddvisits = $datumAddvisits;

        return $this;
    }

    /**
     * Get datumAddvisits
     *
     * @return integer 
     */
    public function getDatumAddvisits()
    {
        return $this->datumAddvisits;
    }

    /**
     * Set datumUseAccount
     *
     * @param integer $datumUseAccount
     * @return VaDatum
     */
    public function setDatumUseAccount($datumUseAccount)
    {
        $this->datumUseAccount = $datumUseAccount;

        return $this;
    }

    /**
     * Get datumUseAccount
     *
     * @return integer 
     */
    public function getDatumUseAccount()
    {
        return $this->datumUseAccount;
    }

    /**
     * Get datumId
     *
     * @return integer 
     */
    public function getDatumId()
    {
        return $this->datumId;
    }
}
