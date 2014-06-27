<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopNummernkreise
 *
 * @ORM\Table(name="shop_nummernkreise")
 * @ORM\Entity
 */
class ShopNummernkreise
{
    /**
     * @var integer
     *
     * @ORM\Column(name="kontakt_id", type="bigint", nullable=false)
     */
    private $kontaktId;

    /**
     * @var integer
     *
     * @ORM\Column(name="nummernkreis_typ_id", type="integer", nullable=false)
     */
    private $nummernkreisTypId;

    /**
     * @var string
     *
     * @ORM\Column(name="nummernkreis_wert", type="string", length=255, nullable=false)
     */
    private $nummernkreisWert;

    /**
     * @var string
     *
     * @ORM\Column(name="nummernkreis_format", type="string", length=255, nullable=false)
     */
    private $nummernkreisFormat;

    /**
     * @var integer
     *
     * @ORM\Column(name="nummernkreis_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nummernkreisId;



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

    /**
     * Get nummernkreisId
     *
     * @return integer 
     */
    public function getNummernkreisId()
    {
        return $this->nummernkreisId;
    }
}
