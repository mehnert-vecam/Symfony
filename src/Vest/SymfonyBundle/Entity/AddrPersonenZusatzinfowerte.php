<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AddrPersonenZusatzinfowerte
 */
class AddrPersonenZusatzinfowerte
{
    /**
     * @var integer
     */
    private $gruppePersonId;

    /**
     * @var string
     */
    private $zusatzinfowertObjekt;

    /**
     * @var string
     */
    private $zusatzinfoId;

    /**
     * @var integer
     */
    private $zusatzinfowertId;


    /**
     * Set gruppePersonId
     *
     * @param integer $gruppePersonId
     * @return AddrPersonenZusatzinfowerte
     */
    public function setGruppePersonId($gruppePersonId)
    {
        $this->gruppePersonId = $gruppePersonId;

        return $this;
    }

    /**
     * Get gruppePersonId
     *
     * @return integer 
     */
    public function getGruppePersonId()
    {
        return $this->gruppePersonId;
    }

    /**
     * Set zusatzinfowertObjekt
     *
     * @param string $zusatzinfowertObjekt
     * @return AddrPersonenZusatzinfowerte
     */
    public function setZusatzinfowertObjekt($zusatzinfowertObjekt)
    {
        $this->zusatzinfowertObjekt = $zusatzinfowertObjekt;

        return $this;
    }

    /**
     * Get zusatzinfowertObjekt
     *
     * @return string 
     */
    public function getZusatzinfowertObjekt()
    {
        return $this->zusatzinfowertObjekt;
    }

    /**
     * Set zusatzinfoId
     *
     * @param string $zusatzinfoId
     * @return AddrPersonenZusatzinfowerte
     */
    public function setZusatzinfoId($zusatzinfoId)
    {
        $this->zusatzinfoId = $zusatzinfoId;

        return $this;
    }

    /**
     * Get zusatzinfoId
     *
     * @return string 
     */
    public function getZusatzinfoId()
    {
        return $this->zusatzinfoId;
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
}
