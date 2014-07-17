<?php

namespace Vest\ResponsaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopBestellungen
 */
class ShopBestellungen
{
    /**
     * @var integer
     */
    private $bestellerKontaktId;

    /**
     * @var integer
     */
    private $bestellerPersonId;

    /**
     * @var string
     */
    private $bestellDatum;

    /**
     * @var string
     */
    private $lieferName;

    /**
     * @var string
     */
    private $lieferVorname;

    /**
     * @var string
     */
    private $lieferNachname;

    /**
     * @var string
     */
    private $lieferStrasse;

    /**
     * @var string
     */
    private $lieferPlz;

    /**
     * @var string
     */
    private $lieferOrt;

    /**
     * @var string
     */
    private $rechnungName;

    /**
     * @var string
     */
    private $rechnungVorname;

    /**
     * @var integer
     */
    private $bestellungId;


    /**
     * Set bestellerKontaktId
     *
     * @param integer $bestellerKontaktId
     * @return ShopBestellungen
     */
    public function setBestellerKontaktId($bestellerKontaktId)
    {
        $this->bestellerKontaktId = $bestellerKontaktId;

        return $this;
    }

    /**
     * Get bestellerKontaktId
     *
     * @return integer 
     */
    public function getBestellerKontaktId()
    {
        return $this->bestellerKontaktId;
    }

    /**
     * Set bestellerPersonId
     *
     * @param integer $bestellerPersonId
     * @return ShopBestellungen
     */
    public function setBestellerPersonId($bestellerPersonId)
    {
        $this->bestellerPersonId = $bestellerPersonId;

        return $this;
    }

    /**
     * Get bestellerPersonId
     *
     * @return integer 
     */
    public function getBestellerPersonId()
    {
        return $this->bestellerPersonId;
    }

    /**
     * Set bestellDatum
     *
     * @param string $bestellDatum
     * @return ShopBestellungen
     */
    public function setBestellDatum($bestellDatum)
    {
        $this->bestellDatum = $bestellDatum;

        return $this;
    }

    /**
     * Get bestellDatum
     *
     * @return string 
     */
    public function getBestellDatum()
    {
        return $this->bestellDatum;
    }

    /**
     * Set lieferName
     *
     * @param string $lieferName
     * @return ShopBestellungen
     */
    public function setLieferName($lieferName)
    {
        $this->lieferName = $lieferName;

        return $this;
    }

    /**
     * Get lieferName
     *
     * @return string 
     */
    public function getLieferName()
    {
        return $this->lieferName;
    }

    /**
     * Set lieferVorname
     *
     * @param string $lieferVorname
     * @return ShopBestellungen
     */
    public function setLieferVorname($lieferVorname)
    {
        $this->lieferVorname = $lieferVorname;

        return $this;
    }

    /**
     * Get lieferVorname
     *
     * @return string 
     */
    public function getLieferVorname()
    {
        return $this->lieferVorname;
    }

    /**
     * Set lieferNachname
     *
     * @param string $lieferNachname
     * @return ShopBestellungen
     */
    public function setLieferNachname($lieferNachname)
    {
        $this->lieferNachname = $lieferNachname;

        return $this;
    }

    /**
     * Get lieferNachname
     *
     * @return string 
     */
    public function getLieferNachname()
    {
        return $this->lieferNachname;
    }

    /**
     * Set lieferStrasse
     *
     * @param string $lieferStrasse
     * @return ShopBestellungen
     */
    public function setLieferStrasse($lieferStrasse)
    {
        $this->lieferStrasse = $lieferStrasse;

        return $this;
    }

    /**
     * Get lieferStrasse
     *
     * @return string 
     */
    public function getLieferStrasse()
    {
        return $this->lieferStrasse;
    }

    /**
     * Set lieferPlz
     *
     * @param string $lieferPlz
     * @return ShopBestellungen
     */
    public function setLieferPlz($lieferPlz)
    {
        $this->lieferPlz = $lieferPlz;

        return $this;
    }

    /**
     * Get lieferPlz
     *
     * @return string 
     */
    public function getLieferPlz()
    {
        return $this->lieferPlz;
    }

    /**
     * Set lieferOrt
     *
     * @param string $lieferOrt
     * @return ShopBestellungen
     */
    public function setLieferOrt($lieferOrt)
    {
        $this->lieferOrt = $lieferOrt;

        return $this;
    }

    /**
     * Get lieferOrt
     *
     * @return string 
     */
    public function getLieferOrt()
    {
        return $this->lieferOrt;
    }

    /**
     * Set rechnungName
     *
     * @param string $rechnungName
     * @return ShopBestellungen
     */
    public function setRechnungName($rechnungName)
    {
        $this->rechnungName = $rechnungName;

        return $this;
    }

    /**
     * Get rechnungName
     *
     * @return string 
     */
    public function getRechnungName()
    {
        return $this->rechnungName;
    }

    /**
     * Set rechnungVorname
     *
     * @param string $rechnungVorname
     * @return ShopBestellungen
     */
    public function setRechnungVorname($rechnungVorname)
    {
        $this->rechnungVorname = $rechnungVorname;

        return $this;
    }

    /**
     * Get rechnungVorname
     *
     * @return string 
     */
    public function getRechnungVorname()
    {
        return $this->rechnungVorname;
    }

    /**
     * Get bestellungId
     *
     * @return integer 
     */
    public function getBestellungId()
    {
        return $this->bestellungId;
    }
}
