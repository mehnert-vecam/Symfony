<?php

namespace Vest\SharedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopBestellungProdukte
 */
class ShopBestellungProdukte
{
    /**
     * @var integer
     */
    private $bestellungProduktId;

    /**
     * @var integer
     */
    private $produktId;

    /**
     * @var integer
     */
    private $bestellId;

    /**
     * @var integer
     */
    private $terminId;

    /**
     * @var integer
     */
    private $personId;

    /**
     * @var float
     */
    private $produktPreis;

    /**
     * @var float
     */
    private $produktMenge;

    /**
     * @var float
     */
    private $produktGesamtPreis;


    /**
     * Get bestellungProduktId
     *
     * @return integer 
     */
    public function getBestellungProduktId()
    {
        return $this->bestellungProduktId;
    }

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
}
