<?php

namespace Vest\SharedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EqAuftraege
 */
class EqAuftraege
{
    /**
     * @var integer
     */
    private $auftragId;

    /**
     * @var \DateTime
     */
    private $auftragStartdatum;

    /**
     * @var \DateTime
     */
    private $auftragEnddatum;

    /**
     * @var string
     */
    private $auftragStatus;

    /**
     * @var integer
     */
    private $anlassId;

    /**
     * @var integer
     */
    private $personId;

    /**
     * @var integer
     */
    private $datumId;


    /**
     * Get auftragId
     *
     * @return integer 
     */
    public function getAuftragId()
    {
        return $this->auftragId;
    }

    /**
     * Set auftragStartdatum
     *
     * @param \DateTime $auftragStartdatum
     * @return EqAuftraege
     */
    public function setAuftragStartdatum($auftragStartdatum)
    {
        $this->auftragStartdatum = $auftragStartdatum;

        return $this;
    }

    /**
     * Get auftragStartdatum
     *
     * @return \DateTime 
     */
    public function getAuftragStartdatum()
    {
        return $this->auftragStartdatum;
    }

    /**
     * Set auftragEnddatum
     *
     * @param \DateTime $auftragEnddatum
     * @return EqAuftraege
     */
    public function setAuftragEnddatum($auftragEnddatum)
    {
        $this->auftragEnddatum = $auftragEnddatum;

        return $this;
    }

    /**
     * Get auftragEnddatum
     *
     * @return \DateTime 
     */
    public function getAuftragEnddatum()
    {
        return $this->auftragEnddatum;
    }

    /**
     * Set auftragStatus
     *
     * @param string $auftragStatus
     * @return EqAuftraege
     */
    public function setAuftragStatus($auftragStatus)
    {
        $this->auftragStatus = $auftragStatus;

        return $this;
    }

    /**
     * Get auftragStatus
     *
     * @return string 
     */
    public function getAuftragStatus()
    {
        return $this->auftragStatus;
    }

    /**
     * Set anlassId
     *
     * @param integer $anlassId
     * @return EqAuftraege
     */
    public function setAnlassId($anlassId)
    {
        $this->anlassId = $anlassId;

        return $this;
    }

    /**
     * Get anlassId
     *
     * @return integer 
     */
    public function getAnlassId()
    {
        return $this->anlassId;
    }

    /**
     * Set personId
     *
     * @param integer $personId
     * @return EqAuftraege
     */
    public function setPersonId($personId)
    {
        $this->personId = $personId;

        return $this;
    }

    /**
     * Get personId
     *
     * @return integer 
     */
    public function getPersonId()
    {
        return $this->personId;
    }

    /**
     * Set datumId
     *
     * @param integer $datumId
     * @return EqAuftraege
     */
    public function setDatumId($datumId)
    {
        $this->datumId = $datumId;

        return $this;
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
