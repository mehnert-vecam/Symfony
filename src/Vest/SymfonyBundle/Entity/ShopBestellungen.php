<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopBestellungen
 *
 * @ORM\Table(name="shop_bestellungen")
 * @ORM\Entity
 */
class ShopBestellungen
{
    /**
     * @var integer
     *
     * @ORM\Column(name="besteller_kontakt_id", type="integer", nullable=true)
     */
    private $bestellerKontaktId;

    /**
     * @var integer
     *
     * @ORM\Column(name="besteller_person_id", type="integer", nullable=true)
     */
    private $bestellerPersonId;

    /**
     * @var string
     *
     * @ORM\Column(name="bestell_datum", type="string", length=45, nullable=true)
     */
    private $bestellDatum;

    /**
     * @var string
     *
     * @ORM\Column(name="liefer_name", type="string", length=45, nullable=true)
     */
    private $lieferName;

    /**
     * @var string
     *
     * @ORM\Column(name="liefer_vorname", type="string", length=45, nullable=true)
     */
    private $lieferVorname;

    /**
     * @var string
     *
     * @ORM\Column(name="liefer_nachname", type="string", length=45, nullable=true)
     */
    private $lieferNachname;

    /**
     * @var string
     *
     * @ORM\Column(name="liefer_strasse", type="string", length=45, nullable=true)
     */
    private $lieferStrasse;

    /**
     * @var string
     *
     * @ORM\Column(name="liefer_plz", type="string", length=45, nullable=true)
     */
    private $lieferPlz;

    /**
     * @var string
     *
     * @ORM\Column(name="liefer_ort", type="string", length=45, nullable=true)
     */
    private $lieferOrt;

    /**
     * @var string
     *
     * @ORM\Column(name="rechnung_name", type="string", length=45, nullable=true)
     */
    private $rechnungName;

    /**
     * @var string
     *
     * @ORM\Column(name="rechnung_vorname", type="string", length=45, nullable=true)
     */
    private $rechnungVorname;

    /**
     * @var integer
     *
     * @ORM\Column(name="bestellung_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
