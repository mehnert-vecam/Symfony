<?php

namespace Vest\ResponsaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopZahlartenEinstellungen
 */
class ShopZahlartenEinstellungen
{
    /**
     * @var integer
     */
    private $zahlartId;

    /**
     * @var string
     */
    private $zahlartApiBenutzer;

    /**
     * @var string
     */
    private $zahlartApiPasswort;

    /**
     * @var string
     */
    private $zahlartApiSignatur;

    /**
     * @var integer
     */
    private $zahlartEinstellungId;


    /**
     * Set zahlartId
     *
     * @param integer $zahlartId
     * @return ShopZahlartenEinstellungen
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
     * Set zahlartApiBenutzer
     *
     * @param string $zahlartApiBenutzer
     * @return ShopZahlartenEinstellungen
     */
    public function setZahlartApiBenutzer($zahlartApiBenutzer)
    {
        $this->zahlartApiBenutzer = $zahlartApiBenutzer;

        return $this;
    }

    /**
     * Get zahlartApiBenutzer
     *
     * @return string 
     */
    public function getZahlartApiBenutzer()
    {
        return $this->zahlartApiBenutzer;
    }

    /**
     * Set zahlartApiPasswort
     *
     * @param string $zahlartApiPasswort
     * @return ShopZahlartenEinstellungen
     */
    public function setZahlartApiPasswort($zahlartApiPasswort)
    {
        $this->zahlartApiPasswort = $zahlartApiPasswort;

        return $this;
    }

    /**
     * Get zahlartApiPasswort
     *
     * @return string 
     */
    public function getZahlartApiPasswort()
    {
        return $this->zahlartApiPasswort;
    }

    /**
     * Set zahlartApiSignatur
     *
     * @param string $zahlartApiSignatur
     * @return ShopZahlartenEinstellungen
     */
    public function setZahlartApiSignatur($zahlartApiSignatur)
    {
        $this->zahlartApiSignatur = $zahlartApiSignatur;

        return $this;
    }

    /**
     * Get zahlartApiSignatur
     *
     * @return string 
     */
    public function getZahlartApiSignatur()
    {
        return $this->zahlartApiSignatur;
    }

    /**
     * Get zahlartEinstellungId
     *
     * @return integer 
     */
    public function getZahlartEinstellungId()
    {
        return $this->zahlartEinstellungId;
    }
}
