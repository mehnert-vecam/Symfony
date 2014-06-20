<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AddrZusatzinfodateien
 */
class AddrZusatzinfodateien
{
    /**
     * @var string
     */
    private $dateiName;

    /**
     * @var string
     */
    private $dateiTyp;

    /**
     * @var string
     */
    private $dateiObjekt;

    /**
     * @var integer
     */
    private $zusatzinfowertId;

    /**
     * @var integer
     */
    private $dateiId;


    /**
     * Set dateiName
     *
     * @param string $dateiName
     * @return AddrZusatzinfodateien
     */
    public function setDateiName($dateiName)
    {
        $this->dateiName = $dateiName;

        return $this;
    }

    /**
     * Get dateiName
     *
     * @return string 
     */
    public function getDateiName()
    {
        return $this->dateiName;
    }

    /**
     * Set dateiTyp
     *
     * @param string $dateiTyp
     * @return AddrZusatzinfodateien
     */
    public function setDateiTyp($dateiTyp)
    {
        $this->dateiTyp = $dateiTyp;

        return $this;
    }

    /**
     * Get dateiTyp
     *
     * @return string 
     */
    public function getDateiTyp()
    {
        return $this->dateiTyp;
    }

    /**
     * Set dateiObjekt
     *
     * @param string $dateiObjekt
     * @return AddrZusatzinfodateien
     */
    public function setDateiObjekt($dateiObjekt)
    {
        $this->dateiObjekt = $dateiObjekt;

        return $this;
    }

    /**
     * Get dateiObjekt
     *
     * @return string 
     */
    public function getDateiObjekt()
    {
        return $this->dateiObjekt;
    }

    /**
     * Set zusatzinfowertId
     *
     * @param integer $zusatzinfowertId
     * @return AddrZusatzinfodateien
     */
    public function setZusatzinfowertId($zusatzinfowertId)
    {
        $this->zusatzinfowertId = $zusatzinfowertId;

        return $this;
    }

    /**
     * Get zusatzinfowertId
     *
     * @return integer 
     */
    public function getZusatzinfowertId()
    {
        return $this->zusatzinfowertId;
    }

    /**
     * Get dateiId
     *
     * @return integer 
     */
    public function getDateiId()
    {
        return $this->dateiId;
    }
}
