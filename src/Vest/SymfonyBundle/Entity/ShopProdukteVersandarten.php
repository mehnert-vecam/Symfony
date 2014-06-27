<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopProdukteVersandarten
 *
 * @ORM\Table(name="shop_produkte_versandarten")
 * @ORM\Entity
 */
class ShopProdukteVersandarten
{
    /**
     * @var string
     *
     * @ORM\Column(name="produkt_id", type="string", length=45, nullable=true)
     */
    private $produktId;

    /**
     * @var string
     *
     * @ORM\Column(name="versandart_id", type="string", length=45, nullable=true)
     */
    private $versandartId;

    /**
     * @var integer
     *
     * @ORM\Column(name="produkt_versandart_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
