<?php

namespace Vest\ResponsaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AddrZusatzinfos
 */
class AddrZusatzinfos
{
    /**
     * @var string
     */
    private $zusatzinfoName;

    /**
     * @var integer
     */
    private $elementId;

    /**
     * @var integer
     */
    private $zusatzinfoPflicht;

    /**
     * @var integer
     */
    private $validierungId;

    /**
     * @var integer
     */
    private $zusatzinfoId;


    /**
     * Set zusatzinfoName
     *
     * @param string $zusatzinfoName
     * @return AddrZusatzinfos
     */
    public function setZusatzinfoName($zusatzinfoName)
    {
        $this->zusatzinfoName = $zusatzinfoName;

        return $this;
    }

    /**
     * Get zusatzinfoName
     *
     * @return string 
     */
    public function getZusatzinfoName()
    {
        return $this->zusatzinfoName;
    }

    /**
     * Set elementId
     *
     * @param integer $elementId
     * @return AddrZusatzinfos
     */
    public function setElementId($elementId)
    {
        $this->elementId = $elementId;

        return $this;
    }

    /**
     * Get elementId
     *
     * @return integer 
     */
    public function getElementId()
    {
        return $this->elementId;
    }

    /**
     * Set zusatzinfoPflicht
     *
     * @param integer $zusatzinfoPflicht
     * @return AddrZusatzinfos
     */
    public function setZusatzinfoPflicht($zusatzinfoPflicht)
    {
        $this->zusatzinfoPflicht = $zusatzinfoPflicht;

        return $this;
    }

    /**
     * Get zusatzinfoPflicht
     *
     * @return integer 
     */
    public function getZusatzinfoPflicht()
    {
        return $this->zusatzinfoPflicht;
    }

    /**
     * Set validierungId
     *
     * @param integer $validierungId
     * @return AddrZusatzinfos
     */
    public function setValidierungId($validierungId)
    {
        $this->validierungId = $validierungId;

        return $this;
    }

    /**
     * Get validierungId
     *
     * @return integer 
     */
    public function getValidierungId()
    {
        return $this->validierungId;
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
}
