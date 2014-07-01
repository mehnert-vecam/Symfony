<?php

namespace Vest\ResponsaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AddrKontakteZusatzinfowerte
 */
class AddrKontakteZusatzinfowerte
{
    /**
     * @var integer
     */
    private $zusatzinfowertId;

    /**
     * @var integer
     */
    private $gruppeKontaktId;

    /**
     * @var string
     */
    private $zusatzinfowertObjekt;

    /**
     * @var string
     */
    private $zusatzinfoId;


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
     * Set gruppeKontaktId
     *
     * @param integer $gruppeKontaktId
     * @return AddrKontakteZusatzinfowerte
     */
    public function setGruppeKontaktId($gruppeKontaktId)
    {
        $this->gruppeKontaktId = $gruppeKontaktId;

        return $this;
    }

    /**
     * Get gruppeKontaktId
     *
     * @return integer 
     */
    public function getGruppeKontaktId()
    {
        return $this->gruppeKontaktId;
    }

    /**
     * Set zusatzinfowertObjekt
     *
     * @param string $zusatzinfowertObjekt
     * @return AddrKontakteZusatzinfowerte
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
     * @return AddrKontakteZusatzinfowerte
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
}
