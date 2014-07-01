<?php

namespace Vest\ResponsaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UfUmfragen
 */
class UfUmfragen
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $umfrageName;

    /**
     * @var string
     */
    private $umfrageBeschreibung;

    /**
     * @var string
     */
    private $umfrageTyp;

    /**
     * @var string
     */
    private $lizenzId;


    /**
     * Get umfrageId
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set umfrageName
     *
     * @param string $umfrageName
     * @return UfUmfragen
     */
    public function setUmfrageName($umfrageName)
    {
        $this->umfrageName = $umfrageName;

        return $this;
    }

    /**
     * Get umfrageName
     *
     * @return string
     */
    public function getUmfrageName()
    {
        return $this->umfrageName;
    }

    /**
     * Set umfrageBeschreibung
     *
     * @param string $umfrageBeschreibung
     * @return UfUmfragen
     */
    public function setUmfrageBeschreibung($umfrageBeschreibung)
    {
        $this->umfrageBeschreibung = $umfrageBeschreibung;

        return $this;
    }

    /**
     * Get umfrageBeschreibung
     *
     * @return string
     */
    public function getUmfrageBeschreibung()
    {
        return $this->umfrageBeschreibung;
    }

    /**
     * Set umfrageTyp
     *
     * @param string $umfrageTyp
     * @return UfUmfragen
     */
    public function setUmfrageTyp($umfrageTyp)
    {
        $this->umfrageTyp = $umfrageTyp;

        return $this;
    }

    /**
     * Get umfrageTyp
     *
     * @return string
     */
    public function getUmfrageTyp()
    {
        return $this->umfrageTyp;
    }

    /**
     * Set lizenzId
     *
     * @param string $lizenzId
     * @return UfUmfragen
     */
    public function setLizenzId($lizenzId)
    {
        $this->lizenzId = $lizenzId;

        return $this;
    }

    /**
     * Get lizenzId
     *
     * @return string
     */
    public function getLizenzId()
    {
        return $this->lizenzId;
    }







    /**
     * @var fragen object
     */
    private $fragen;

     /**
     * Set $fragen
     *
     * @param string fragen
     * @return UfUmfragen
     */
    public function setFragen($fragen)
    {
        $this->fragen = $fragen;

        return $this;
    }

    /**
     * Get fragen
     *
     * @return string
     */
    public function getFragen()
    {
        return $this->fragen;
    }
    /**
     * @var integer
     */
    private $umfrageId;


    /**
     * Get umfrageId
     *
     * @return integer 
     */
    public function getUmfrageId()
    {
        return $this->umfrageId;
    }
}
