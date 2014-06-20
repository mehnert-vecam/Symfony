<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopProdukteVersandarten
 */
class ShopProdukteVersandarten
{
    /**
     * @var string
     */
    private $produktId;

    /**
     * @var string
     */
    private $versandartId;

    /**
     * @var integer
     */
    private $produktVersandartId;


    /**
     * Set produktId
     *
     * @param string $produktId
     * @return ShopProdukteVersandarten
     */
    public function setProduktId($produktId)
    {
        $this->produktId = $produktId;

        return $this;
    }

    /**
     * Get produktId
     *
     * @return string 
     */
    public function getProduktId()
    {
        return $this->produktId;
    }

    /**
     * Set versandartId
     *
     * @param string $versandartId
     * @return ShopProdukteVersandarten
     */
    public function setVersandartId($versandartId)
    {
        $this->versandartId = $versandartId;

        return $this;
    }

    /**
     * Get versandartId
     *
     * @return string 
     */
    public function getVersandartId()
    {
        return $this->versandartId;
    }

    /**
     * Get produktVersandartId
     *
     * @return integer 
     */
    public function getProduktVersandartId()
    {
        return $this->produktVersandartId;
    }
}
