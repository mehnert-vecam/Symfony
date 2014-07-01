<?php

namespace Vest\ResponsaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopProdukte
 */
class ShopProdukte
{
    /**
     * @var integer
     */
    private $produktId;

    /**
     * @var integer
     */
    private $kontaktId;

    /**
     * @var string
     */
    private $produktName;

    /**
     * @var string
     */
    private $produktTeaser;

    /**
     * @var integer
     */
    private $kategorieId;

    /**
     * @var boolean
     */
    private $produktStatus;


    /**
     * Get produktId
     *
     * @return integer 
     */
    public function getProduktId()
    {
        return $this->produktId;
    }

    /**
     * Set kontaktId
     *
     * @param integer $kontaktId
     * @return ShopProdukte
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
     * Set produktName
     *
     * @param string $produktName
     * @return ShopProdukte
     */
    public function setProduktName($produktName)
    {
        $this->produktName = $produktName;

        return $this;
    }

    /**
     * Get produktName
     *
     * @return string 
     */
    public function getProduktName()
    {
        return $this->produktName;
    }

    /**
     * Set produktTeaser
     *
     * @param string $produktTeaser
     * @return ShopProdukte
     */
    public function setProduktTeaser($produktTeaser)
    {
        $this->produktTeaser = $produktTeaser;

        return $this;
    }

    /**
     * Get produktTeaser
     *
     * @return string 
     */
    public function getProduktTeaser()
    {
        return $this->produktTeaser;
    }

    /**
     * Set kategorieId
     *
     * @param integer $kategorieId
     * @return ShopProdukte
     */
    public function setKategorieId($kategorieId)
    {
        $this->kategorieId = $kategorieId;

        return $this;
    }

    /**
     * Get kategorieId
     *
     * @return integer 
     */
    public function getKategorieId()
    {
        return $this->kategorieId;
    }

    /**
     * Set produktStatus
     *
     * @param boolean $produktStatus
     * @return ShopProdukte
     */
    public function setProduktStatus($produktStatus)
    {
        $this->produktStatus = $produktStatus;

        return $this;
    }

    /**
     * Get produktStatus
     *
     * @return boolean 
     */
    public function getProduktStatus()
    {
        return $this->produktStatus;
    }
}
