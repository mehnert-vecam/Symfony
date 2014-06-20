<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LzLizenzen
 */
class LzLizenzen
{
    /**
     * @var integer
     */
    private $anwendungId;

    /**
     * @var integer
     */
    private $ansichtId;

    /**
     * @var string
     */
    private $lizenzName;

    /**
     * @var string
     */
    private $lizenzBeschreibung;

    /**
     * @var string
     */
    private $lizenzPreis;

    /**
     * @var integer
     */
    private $typId;

    /**
     * @var integer
     */
    private $lizenzKeysZeigen;

    /**
     * @var integer
     */
    private $lizenzEventCatId;

    /**
     * @var integer
     */
    private $lizenzEventMenge;

    /**
     * @var string
     */
    private $lizenzDauer;

    /**
     * @var integer
     */
    private $lizenzAbo;

    /**
     * @var integer
     */
    private $lizenzId;


    /**
     * Set anwendungId
     *
     * @param integer $anwendungId
     * @return LzLizenzen
     */
    public function setAnwendungId($anwendungId)
    {
        $this->anwendungId = $anwendungId;

        return $this;
    }

    /**
     * Get anwendungId
     *
     * @return integer 
     */
    public function getAnwendungId()
    {
        return $this->anwendungId;
    }

    /**
     * Set ansichtId
     *
     * @param integer $ansichtId
     * @return LzLizenzen
     */
    public function setAnsichtId($ansichtId)
    {
        $this->ansichtId = $ansichtId;

        return $this;
    }

    /**
     * Get ansichtId
     *
     * @return integer 
     */
    public function getAnsichtId()
    {
        return $this->ansichtId;
    }

    /**
     * Set lizenzName
     *
     * @param string $lizenzName
     * @return LzLizenzen
     */
    public function setLizenzName($lizenzName)
    {
        $this->lizenzName = $lizenzName;

        return $this;
    }

    /**
     * Get lizenzName
     *
     * @return string 
     */
    public function getLizenzName()
    {
        return $this->lizenzName;
    }

    /**
     * Set lizenzBeschreibung
     *
     * @param string $lizenzBeschreibung
     * @return LzLizenzen
     */
    public function setLizenzBeschreibung($lizenzBeschreibung)
    {
        $this->lizenzBeschreibung = $lizenzBeschreibung;

        return $this;
    }

    /**
     * Get lizenzBeschreibung
     *
     * @return string 
     */
    public function getLizenzBeschreibung()
    {
        return $this->lizenzBeschreibung;
    }

    /**
     * Set lizenzPreis
     *
     * @param string $lizenzPreis
     * @return LzLizenzen
     */
    public function setLizenzPreis($lizenzPreis)
    {
        $this->lizenzPreis = $lizenzPreis;

        return $this;
    }

    /**
     * Get lizenzPreis
     *
     * @return string 
     */
    public function getLizenzPreis()
    {
        return $this->lizenzPreis;
    }

    /**
     * Set typId
     *
     * @param integer $typId
     * @return LzLizenzen
     */
    public function setTypId($typId)
    {
        $this->typId = $typId;

        return $this;
    }

    /**
     * Get typId
     *
     * @return integer 
     */
    public function getTypId()
    {
        return $this->typId;
    }

    /**
     * Set lizenzKeysZeigen
     *
     * @param integer $lizenzKeysZeigen
     * @return LzLizenzen
     */
    public function setLizenzKeysZeigen($lizenzKeysZeigen)
    {
        $this->lizenzKeysZeigen = $lizenzKeysZeigen;

        return $this;
    }

    /**
     * Get lizenzKeysZeigen
     *
     * @return integer 
     */
    public function getLizenzKeysZeigen()
    {
        return $this->lizenzKeysZeigen;
    }

    /**
     * Set lizenzEventCatId
     *
     * @param integer $lizenzEventCatId
     * @return LzLizenzen
     */
    public function setLizenzEventCatId($lizenzEventCatId)
    {
        $this->lizenzEventCatId = $lizenzEventCatId;

        return $this;
    }

    /**
     * Get lizenzEventCatId
     *
     * @return integer 
     */
    public function getLizenzEventCatId()
    {
        return $this->lizenzEventCatId;
    }

    /**
     * Set lizenzEventMenge
     *
     * @param integer $lizenzEventMenge
     * @return LzLizenzen
     */
    public function setLizenzEventMenge($lizenzEventMenge)
    {
        $this->lizenzEventMenge = $lizenzEventMenge;

        return $this;
    }

    /**
     * Get lizenzEventMenge
     *
     * @return integer 
     */
    public function getLizenzEventMenge()
    {
        return $this->lizenzEventMenge;
    }

    /**
     * Set lizenzDauer
     *
     * @param string $lizenzDauer
     * @return LzLizenzen
     */
    public function setLizenzDauer($lizenzDauer)
    {
        $this->lizenzDauer = $lizenzDauer;

        return $this;
    }

    /**
     * Get lizenzDauer
     *
     * @return string 
     */
    public function getLizenzDauer()
    {
        return $this->lizenzDauer;
    }

    /**
     * Set lizenzAbo
     *
     * @param integer $lizenzAbo
     * @return LzLizenzen
     */
    public function setLizenzAbo($lizenzAbo)
    {
        $this->lizenzAbo = $lizenzAbo;

        return $this;
    }

    /**
     * Get lizenzAbo
     *
     * @return integer 
     */
    public function getLizenzAbo()
    {
        return $this->lizenzAbo;
    }

    /**
     * Get lizenzId
     *
     * @return integer 
     */
    public function getLizenzId()
    {
        return $this->lizenzId;
    }
}
