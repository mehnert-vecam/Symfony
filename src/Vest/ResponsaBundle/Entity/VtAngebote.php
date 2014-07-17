<?php

namespace Vest\ResponsaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VtAngebote
 */
class VtAngebote
{
    /**
     * @var integer
     */
    private $kontaktId;

    /**
     * @var string
     */
    private $angebotName;

    /**
     * @var string
     */
    private $angebotBeschreibung;

    /**
     * @var integer
     */
    private $angebotNutzung;

    /**
     * @var string
     */
    private $angebotDauer;

    /**
     * @var integer
     */
    private $angebotCat;

    /**
     * @var boolean
     */
    private $angebotReqPerson;

    /**
     * @var boolean
     */
    private $angebotIntern;

    /**
     * @var integer
     */
    private $angebotId;


    /**
     * Set kontaktId
     *
     * @param integer $kontaktId
     * @return VtAngebote
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
     * Set angebotName
     *
     * @param string $angebotName
     * @return VtAngebote
     */
    public function setAngebotName($angebotName)
    {
        $this->angebotName = $angebotName;

        return $this;
    }

    /**
     * Get angebotName
     *
     * @return string 
     */
    public function getAngebotName()
    {
        return $this->angebotName;
    }

    /**
     * Set angebotBeschreibung
     *
     * @param string $angebotBeschreibung
     * @return VtAngebote
     */
    public function setAngebotBeschreibung($angebotBeschreibung)
    {
        $this->angebotBeschreibung = $angebotBeschreibung;

        return $this;
    }

    /**
     * Get angebotBeschreibung
     *
     * @return string 
     */
    public function getAngebotBeschreibung()
    {
        return $this->angebotBeschreibung;
    }

    /**
     * Set angebotNutzung
     *
     * @param integer $angebotNutzung
     * @return VtAngebote
     */
    public function setAngebotNutzung($angebotNutzung)
    {
        $this->angebotNutzung = $angebotNutzung;

        return $this;
    }

    /**
     * Get angebotNutzung
     *
     * @return integer 
     */
    public function getAngebotNutzung()
    {
        return $this->angebotNutzung;
    }

    /**
     * Set angebotDauer
     *
     * @param string $angebotDauer
     * @return VtAngebote
     */
    public function setAngebotDauer($angebotDauer)
    {
        $this->angebotDauer = $angebotDauer;

        return $this;
    }

    /**
     * Get angebotDauer
     *
     * @return string 
     */
    public function getAngebotDauer()
    {
        return $this->angebotDauer;
    }

    /**
     * Set angebotCat
     *
     * @param integer $angebotCat
     * @return VtAngebote
     */
    public function setAngebotCat($angebotCat)
    {
        $this->angebotCat = $angebotCat;

        return $this;
    }

    /**
     * Get angebotCat
     *
     * @return integer 
     */
    public function getAngebotCat()
    {
        return $this->angebotCat;
    }

    /**
     * Set angebotReqPerson
     *
     * @param boolean $angebotReqPerson
     * @return VtAngebote
     */
    public function setAngebotReqPerson($angebotReqPerson)
    {
        $this->angebotReqPerson = $angebotReqPerson;

        return $this;
    }

    /**
     * Get angebotReqPerson
     *
     * @return boolean 
     */
    public function getAngebotReqPerson()
    {
        return $this->angebotReqPerson;
    }

    /**
     * Set angebotIntern
     *
     * @param boolean $angebotIntern
     * @return VtAngebote
     */
    public function setAngebotIntern($angebotIntern)
    {
        $this->angebotIntern = $angebotIntern;

        return $this;
    }

    /**
     * Get angebotIntern
     *
     * @return boolean 
     */
    public function getAngebotIntern()
    {
        return $this->angebotIntern;
    }

    /**
     * Get angebotId
     *
     * @return integer 
     */
    public function getAngebotId()
    {
        return $this->angebotId;
    }
}
