<?php

namespace Vest\SharedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Resantwort
 */
class Resantwort
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $fId;

    /**
     * @var string
     */
    private $antwort;

    /**
     * @var string
     */
    private $auswertungsbereich;

    /**
     * @var integer
     */
    private $fType;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fId
     *
     * @param integer $fId
     * @return Resantwort
     */
    public function setFId($fId)
    {
        $this->fId = $fId;

        return $this;
    }

    /**
     * Get fId
     *
     * @return integer 
     */
    public function getFId()
    {
        return $this->fId;
    }

    /**
     * Set antwort
     *
     * @param string $antwort
     * @return Resantwort
     */
    public function setAntwort($antwort)
    {
        $this->antwort = $antwort;

        return $this;
    }

    /**
     * Get antwort
     *
     * @return string 
     */
    public function getAntwort()
    {
        return $this->antwort;
    }

    /**
     * Set auswertungsbereich
     *
     * @param string $auswertungsbereich
     * @return Resantwort
     */
    public function setAuswertungsbereich($auswertungsbereich)
    {
        $this->auswertungsbereich = $auswertungsbereich;

        return $this;
    }

    /**
     * Get auswertungsbereich
     *
     * @return string 
     */
    public function getAuswertungsbereich()
    {
        return $this->auswertungsbereich;
    }

    /**
     * Set fType
     *
     * @param integer $fType
     * @return Resantwort
     */
    public function setFType($fType)
    {
        $this->fType = $fType;

        return $this;
    }

    /**
     * Get fType
     *
     * @return integer 
     */
    public function getFType()
    {
        return $this->fType;
    }
}
