<?php

namespace Vest\ResponsaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopNummernkreise
 */
class ShopNummernkreise
{
    /**
     * @var integer
     */
    private $nummernkreisId;

    /**
     * @var integer
     */
    private $kontaktId;

    /**
     * @var integer
     */
    private $nummernkreisTypId;

    /**
     * @var string
     */
    private $nummernkreisWert;

    /**
     * @var string
     */
    private $nummernkreisFormat;


    /**
     * Get nummernkreisId
     *
     * @return integer 
     */
    public function getNummernkreisId()
    {
        return $this->nummernkreisId;
    }

    /**
     * Set kontaktId
     *
     * @param integer $kontaktId
     * @return ShopNummernkreise
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
     * Set nummernkreisTypId
     *
     * @param integer $nummernkreisTypId
     * @return ShopNummernkreise
     */
    public function setNummernkreisTypId($nummernkreisTypId)
    {
        $this->nummernkreisTypId = $nummernkreisTypId;

        return $this;
    }

    /**
     * Get nummernkreisTypId
     *
     * @return integer 
     */
    public function getNummernkreisTypId()
    {
        return $this->nummernkreisTypId;
    }

    /**
     * Set nummernkreisWert
     *
     * @param string $nummernkreisWert
     * @return ShopNummernkreise
     */
    public function setNummernkreisWert($nummernkreisWert)
    {
        $this->nummernkreisWert = $nummernkreisWert;

        return $this;
    }

    /**
     * Get nummernkreisWert
     *
     * @return string 
     */
    public function getNummernkreisWert()
    {
        return $this->nummernkreisWert;
    }

    /**
     * Set nummernkreisFormat
     *
     * @param string $nummernkreisFormat
     * @return ShopNummernkreise
     */
    public function setNummernkreisFormat($nummernkreisFormat)
    {
        $this->nummernkreisFormat = $nummernkreisFormat;

        return $this;
    }

    /**
     * Get nummernkreisFormat
     *
     * @return string 
     */
    public function getNummernkreisFormat()
    {
        return $this->nummernkreisFormat;
    }
}
