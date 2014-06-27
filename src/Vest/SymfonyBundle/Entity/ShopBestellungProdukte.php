<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopBestellungProdukte
 *
 * @ORM\Table(name="shop_bestellung_produkte", indexes={@ORM\Index(name="fk_shop_bestellung_produkte_shop_produkte1", columns={"produkt_id"}), @ORM\Index(name="fk_shop_bestellung_produkte_shop_bestellungen1", columns={"bestell_id"}), @ORM\Index(name="fk_shop_bestellung_produkte_shop_termine1", columns={"termin_id"})})
 * @ORM\Entity
 */
class ShopBestellungProdukte
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
     * @ORM\Column(name="bestell_id", type="integer", nullable=true)
     */
    private $bestellId;

    /**
     * @var integer
     *
     * @ORM\Column(name="termin_id", type="integer", nullable=true)
     */
    private $terminId;

    /**
     * @var integer
     *
     * @ORM\Column(name="person_id", type="integer", nullable=true)
     */
    private $personId;

    /**
     * @var float
     *
     * @ORM\Column(name="produkt_preis", type="float", precision=10, scale=0, nullable=true)
     */
    private $produktPreis;

    /**
     * @var float
     *
     * @ORM\Column(name="produkt_menge", type="float", precision=10, scale=0, nullable=true)
     */
    private $produktMenge;

    /**
     * @var float
     *
     * @ORM\Column(name="produkt_gesamt_preis", type="float", precision=10, scale=0, nullable=true)
     */
    private $produktGesamtPreis;

    /**
     * @var integer
     *
     * @ORM\Column(name="bestellung_produkt_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $bestellungProduktId;



    /**
     * Set produktId
     *
     * @param integer $produktId
     * @return ShopBestellungProdukte
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
     * Set bestellId
     *
     * @param integer $bestellId
     * @return ShopBestellungProdukte
     */
    public function setBestellId($bestellId)
    {
        $this->bestellId = $bestellId;

        return $this;
    }

    /**
     * Get bestellId
     *
     * @return integer 
     */
    public function getBestellId()
    {
        return $this->bestellId;
    }

    /**
     * Set terminId
     *
     * @param integer $terminId
     * @return ShopBestellungProdukte
     */
    public function setTerminId($terminId)
    {
        $this->terminId = $terminId;

        return $this;
    }

    /**
     * Get terminId
     *
     * @return integer 
     */
    public function getTerminId()
    {
        return $this->terminId;
    }

    /**
     * Set personId
     *
     * @param integer $personId
     * @return ShopBestellungProdukte
     */
    public function setPersonId($personId)
    {
        $this->personId = $personId;

        return $this;
    }

    /**
     * Get personId
     *
     * @return integer 
     */
    public function getPersonId()
    {
        return $this->personId;
    }

    /**
     * Set produktPreis
     *
     * @param float $produktPreis
     * @return ShopBestellungProdukte
     */
    public function setProduktPreis($produktPreis)
    {
        $this->produktPreis = $produktPreis;

        return $this;
    }

    /**
     * Get produktPreis
     *
     * @return float 
     */
    public function getProduktPreis()
    {
        return $this->produktPreis;
    }

    /**
     * Set produktMenge
     *
     * @param float $produktMenge
     * @return ShopBestellungProdukte
     */
    public function setProduktMenge($produktMenge)
    {
        $this->produktMenge = $produktMenge;

        return $this;
    }

    /**
     * Get produktMenge
     *
     * @return float 
     */
    public function getProduktMenge()
    {
        return $this->produktMenge;
    }

    /**
     * Set produktGesamtPreis
     *
     * @param float $produktGesamtPreis
     * @return ShopBestellungProdukte
     */
    public function setProduktGesamtPreis($produktGesamtPreis)
    {
        $this->produktGesamtPreis = $produktGesamtPreis;

        return $this;
    }

    /**
     * Get produktGesamtPreis
     *
     * @return float 
     */
    public function getProduktGesamtPreis()
    {
        return $this->produktGesamtPreis;
    }

    /**
     * Get bestellungProduktId
     *
     * @return integer 
     */
    public function getBestellungProduktId()
    {
        return $this->bestellungProduktId;
    }
}
