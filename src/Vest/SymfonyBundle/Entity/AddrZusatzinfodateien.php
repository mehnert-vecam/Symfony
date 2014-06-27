<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AddrZusatzinfodateien
 *
 * @ORM\Table(name="addr_zusatzinfodateien")
 * @ORM\Entity
 */
class AddrZusatzinfodateien
{
    /**
     * @var string
     *
     * @ORM\Column(name="datei_name", type="string", length=45, nullable=true)
     */
    private $dateiName;

    /**
     * @var string
     *
     * @ORM\Column(name="datei_typ", type="string", length=45, nullable=true)
     */
    private $dateiTyp;

    /**
     * @var string
     *
     * @ORM\Column(name="datei_objekt", type="blob", nullable=true)
     */
    private $dateiObjekt;

    /**
     * @var integer
     *
     * @ORM\Column(name="zusatzinfowert_id", type="bigint", nullable=false)
     */
    private $zusatzinfowertId;

    /**
     * @var integer
     *
     * @ORM\Column(name="datei_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
