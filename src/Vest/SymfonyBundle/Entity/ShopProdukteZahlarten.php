<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopProdukteZahlarten
 *
 * @ORM\Table(name="shop_produkte_zahlarten", indexes={@ORM\Index(name="fk_shop_produkte_zahlarten_shop_zahlarten1", columns={"zahlart_id"}), @ORM\Index(name="fk_shop_produkte_zahlarten_shop_produkte1", columns={"produkt_id"})})
 * @ORM\Entity
 */
class ShopProdukteZahlarten
{
    /**
     * @var integer
     *
     * @ORM\Column(name="produkt_id", type="integer", nullable=true)
     */
    private $produktId;

    /**
     * @var integer
     *
     * @ORM\Column(name="zahlart_id", type="integer", nullable=true)
     */
    private $zahlartId;

    /**
     * @var integer
     *
     * @ORM\Column(name="produkt_zahlart_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $produktZahlartId;



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

    /**
     * Get produktZahlartId
     *
     * @return integer 
     */
    public function getProduktZahlartId()
    {
        return $this->produktZahlartId;
    }
}
