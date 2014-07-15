<?php

namespace Vest\SharedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RbacGruppenAddrZusatzinfos
 */
class RbacGruppenAddrZusatzinfos
{
    /**
     * @var integer
     */
    private $gruppeZusatzinfoId;

    /**
     * @var integer
     */
    private $gruppeId;

    /**
     * @var integer
     */
    private $zusatzinfoId;

    /**
     * @var string
     */
    private $zusatzinfoAnzeigename;

    /**
     * @var integer
     */
    private $zusatzinfoTypId;


    /**
     * Get gruppeZusatzinfoId
     *
     * @return integer 
     */
    public function getGruppeZusatzinfoId()
    {
        return $this->gruppeZusatzinfoId;
    }

    /**
     * Set gruppeId
     *
     * @param integer $gruppeId
     * @return RbacGruppenAddrZusatzinfos
     */
    public function setGruppeId($gruppeId)
    {
        $this->gruppeId = $gruppeId;

        return $this;
    }

    /**
     * Get gruppeId
     *
     * @return integer 
     */
    public function getGruppeId()
    {
        return $this->gruppeId;
    }

    /**
     * Set zusatzinfoId
     *
     * @param integer $zusatzinfoId
     * @return RbacGruppenAddrZusatzinfos
     */
    public function setZusatzinfoId($zusatzinfoId)
    {
        $this->zusatzinfoId = $zusatzinfoId;

        return $this;
    }

    /**
     * Get zusatzinfoId
     *
     * @return integer 
     */
    public function getZusatzinfoId()
    {
        return $this->zusatzinfoId;
    }

    /**
     * Set zusatzinfoAnzeigename
     *
     * @param string $zusatzinfoAnzeigename
     * @return RbacGruppenAddrZusatzinfos
     */
    public function setZusatzinfoAnzeigename($zusatzinfoAnzeigename)
    {
        $this->zusatzinfoAnzeigename = $zusatzinfoAnzeigename;

        return $this;
    }

    /**
     * Get zusatzinfoAnzeigename
     *
     * @return string 
     */
    public function getZusatzinfoAnzeigename()
    {
        return $this->zusatzinfoAnzeigename;
    }

    /**
     * Set zusatzinfoTypId
     *
     * @param integer $zusatzinfoTypId
     * @return RbacGruppenAddrZusatzinfos
     */
    public function setZusatzinfoTypId($zusatzinfoTypId)
    {
        $this->zusatzinfoTypId = $zusatzinfoTypId;

        return $this;
    }

    /**
     * Get zusatzinfoTypId
     *
     * @return integer 
     */
    public function getZusatzinfoTypId()
    {
        return $this->zusatzinfoTypId;
    }
}
