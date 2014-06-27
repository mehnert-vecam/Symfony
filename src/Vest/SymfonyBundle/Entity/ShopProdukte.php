<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopProdukte
 *
 * @ORM\Table(name="shop_produkte", indexes={@ORM\Index(name="fk_shop_produkte_shop_kategorien1", columns={"kategorie_id"})})
 * @ORM\Entity
 */
class ShopProdukte
{
    /**
     * @var integer
     *
     * @ORM\Column(name="kontakt_id", type="bigint", nullable=true)
     */
    private $kontaktId;

    /**
     * @var string
     *
     * @ORM\Column(name="produkt_name", type="string", length=255, nullable=true)
     */
    private $produktName;

    /**
     * @var string
     *
     * @ORM\Column(name="produkt_teaser", type="text", nullable=true)
     */
    private $produktTeaser;

    /**
     * @var integer
     *
     * @ORM\Column(name="kategorie_id", type="integer", nullable=true)
     */
    private $kategorieId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="produkt_status", type="boolean", nullable=true)
     */
    private $produktStatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="produkt_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $produktId;



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

    /**
     * Get produktId
     *
     * @return integer 
     */
    public function getProduktId()
    {
        return $this->produktId;
    }
}
