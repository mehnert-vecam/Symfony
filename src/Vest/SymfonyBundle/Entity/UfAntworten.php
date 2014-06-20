<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UfAntworten
 */
class UfAntworten
{
    /**
     * @var integer
     */
    private $frageId;

    /**
     * @var integer
     */
    private $kontaktId;

    /**
     * @var string
     */
    private $antwortWert;

    /**
     * @var string
     */
    private $antwortBenutzerdefiniert;

    /**
     * @var string
     */
    private $antwortBenutzerdefiniert2;

    /**
     * @var integer
     */
    private $datumId;

    /**
     * @var integer
     */
    private $personId;

    /**
     * @var string
     */
    private $eventTag;

    /**
     * @var string
     */
    private $antwortToken;

    /**
     * @var \DateTime
     */
    private $antwortDatum;

    /**
     * @var integer
     */
    private $antwortId;


    /**
     * Set frageId
     *
     * @param integer $frageId
     * @return UfAntworten
     */
    public function setFrageId($frageId)
    {
        $this->frageId = $frageId;

        return $this;
    }

    /**
     * Get frageId
     *
     * @return integer 
     */
    public function getFrageId()
    {
        return $this->frageId;
    }

    /**
     * Set kontaktId
     *
     * @param integer $kontaktId
     * @return UfAntworten
     */
    public function setKontaktId($kontaktId)
    {
        $this->kontaktId = $kontaktId;

        return $this;
    }

    /**
     * Get kontaktId
     *
     * @return integer 
     */
    public function getKontaktId()
    {
        return $this->kontaktId;
    }

    /**
     * Set antwortWert
     *
     * @param string $antwortWert
     * @return UfAntworten
     */
    public function setAntwortWert($antwortWert)
    {
        $this->antwortWert = $antwortWert;

        return $this;
    }

    /**
     * Get antwortWert
     *
     * @return string 
     */
    public function getAntwortWert()
    {
        return $this->antwortWert;
    }

    /**
     * Set antwortBenutzerdefiniert
     *
     * @param string $antwortBenutzerdefiniert
     * @return UfAntworten
     */
    public function setAntwortBenutzerdefiniert($antwortBenutzerdefiniert)
    {
        $this->antwortBenutzerdefiniert = $antwortBenutzerdefiniert;

        return $this;
    }

    /**
     * Get antwortBenutzerdefiniert
     *
     * @return string 
     */
    public function getAntwortBenutzerdefiniert()
    {
        return $this->antwortBenutzerdefiniert;
    }

    /**
     * Set antwortBenutzerdefiniert2
     *
     * @param string $antwortBenutzerdefiniert2
     * @return UfAntworten
     */
    public function setAntwortBenutzerdefiniert2($antwortBenutzerdefiniert2)
    {
        $this->antwortBenutzerdefiniert2 = $antwortBenutzerdefiniert2;

        return $this;
    }

    /**
     * Get antwortBenutzerdefiniert2
     *
     * @return string 
     */
    public function getAntwortBenutzerdefiniert2()
    {
        return $this->antwortBenutzerdefiniert2;
    }

    /**
     * Set datumId
     *
     * @param integer $datumId
     * @return UfAntworten
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
     * Set personId
     *
     * @param integer $personId
     * @return UfAntworten
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
     * Set eventTag
     *
     * @param string $eventTag
     * @return UfAntworten
     */
    public function setEventTag($eventTag)
    {
        $this->eventTag = $eventTag;

        return $this;
    }

    /**
     * Get eventTag
     *
     * @return string 
     */
    public function getEventTag()
    {
        return $this->eventTag;
    }

    /**
     * Set antwortToken
     *
     * @param string $antwortToken
     * @return UfAntworten
     */
    public function setAntwortToken($antwortToken)
    {
        $this->antwortToken = $antwortToken;

        return $this;
    }

    /**
     * Get antwortToken
     *
     * @return string 
     */
    public function getAntwortToken()
    {
        return $this->antwortToken;
    }

    /**
     * Set antwortDatum
     *
     * @param \DateTime $antwortDatum
     * @return UfAntworten
     */
    public function setAntwortDatum($antwortDatum)
    {
        $this->antwortDatum = $antwortDatum;

        return $this;
    }

    /**
     * Get antwortDatum
     *
     * @return \DateTime 
     */
    public function getAntwortDatum()
    {
        return $this->antwortDatum;
    }

    /**
     * Get antwortId
     *
     * @return integer 
     */
    public function getAntwortId()
    {
        return $this->antwortId;
    }
}
