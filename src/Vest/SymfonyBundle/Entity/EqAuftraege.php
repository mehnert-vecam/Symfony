<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EqAuftraege
 *
 * @ORM\Table(name="eq_auftraege")
 * @ORM\Entity
 */
class EqAuftraege
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="auftrag_startdatum", type="datetime", nullable=true)
     */
    private $auftragStartdatum;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="auftrag_enddatum", type="date", nullable=true)
     */
    private $auftragEnddatum;

    /**
     * @var string
     *
     * @ORM\Column(name="auftrag_status", type="string", length=200, nullable=true)
     */
    private $auftragStatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="anlass_id", type="bigint", nullable=false)
     */
    private $anlassId;

    /**
     * @var integer
     *
     * @ORM\Column(name="person_id", type="bigint", nullable=false)
     */
    private $personId;

    /**
     * @var integer
     *
     * @ORM\Column(name="datum_id", type="bigint", nullable=false)
     */
    private $datumId;

    /**
     * @var integer
     *
     * @ORM\Column(name="auftrag_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $auftragId;



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

    /**
     * Get auftragId
     *
     * @return integer 
     */
    public function getAuftragId()
    {
        return $this->auftragId;
    }
}
