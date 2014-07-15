<?php

namespace Vest\SharedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopProdukteZahlarten
 */
class ShopProdukteZahlarten
{
    /**
     * @var integer
     */
    private $produktZahlartId;

    /**
     * @var integer
     */
    private $produktId;

    /**
     * @var integer
     */
    private $zahlartId;


    /**
     * Get produktZahlartId
     *
     * @return integer 
     */
    public function getProduktZahlartId()
    {
        return $this->produktZahlartId;
    }

    /**
     * Set produktId
     *
     * @param integer $produktId
     * @return ShopProdukteZahlarten
     */
    public function setProduktId($produktId)
    {
        $this->produktId = $produktId;

        return $this;
    }

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
     * Set zahlartId
     *
     * @param integer $zahlartId
     * @return ShopProdukteZahlarten
     */
    public function setZahlartId($zahlartId)
    {
        $this->zahlartId = $zahlartId;

        return $this;
    }

    /**
     * Get zahlartId
     *
     * @return integer 
     */
    public function getZahlartId()
    {
        return $this->zahlartId;
    }
}
