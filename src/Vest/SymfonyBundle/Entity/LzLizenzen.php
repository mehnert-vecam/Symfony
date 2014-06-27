<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LzLizenzen
 *
 * @ORM\Table(name="lz_lizenzen")
 * @ORM\Entity
 */
class LzLizenzen
{
    /**
     * @var integer
     *
     * @ORM\Column(name="anwendung_id", type="integer", nullable=false)
     */
    private $anwendungId;

    /**
     * @var integer
     *
     * @ORM\Column(name="ansicht_id", type="integer", nullable=false)
     */
    private $ansichtId;

    /**
     * @var string
     *
     * @ORM\Column(name="lizenz_name", type="string", length=45, nullable=true)
     */
    private $lizenzName;

    /**
     * @var string
     *
     * @ORM\Column(name="lizenz_beschreibung", type="text", nullable=true)
     */
    private $lizenzBeschreibung;

    /**
     * @var string
     *
     * @ORM\Column(name="lizenz_preis", type="string", length=45, nullable=true)
     */
    private $lizenzPreis;

    /**
     * @var integer
     *
     * @ORM\Column(name="typ_id", type="integer", nullable=true)
     */
    private $typId;

    /**
     * @var integer
     *
     * @ORM\Column(name="lizenz_keys_zeigen", type="integer", nullable=false)
     */
    private $lizenzKeysZeigen;

    /**
     * @var integer
     *
     * @ORM\Column(name="lizenz_event_cat_id", type="integer", nullable=false)
     */
    private $lizenzEventCatId;

    /**
     * @var integer
     *
     * @ORM\Column(name="lizenz_event_menge", type="integer", nullable=false)
     */
    private $lizenzEventMenge;

    /**
     * @var string
     *
     * @ORM\Column(name="lizenz_dauer", type="string", length=10, nullable=false)
     */
    private $lizenzDauer;

    /**
     * @var integer
     *
     * @ORM\Column(name="lizenz_abo", type="integer", nullable=false)
     */
    private $lizenzAbo;

    /**
     * @var integer
     *
     * @ORM\Column(name="lizenz_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $lizenzId;



    /**
     * Set anwendungId
     *
     * @param integer $anwendungId
     * @return LzLizenzen
     */
    public function setAnwendungId($anwendungId)
    {
        $this->anwendungId = $anwendungId;

        return $this;
    }

    /**
     * Get anwendungId
     *
     * @return integer 
     */
    public function getAnwendungId()
    {
        return $this->anwendungId;
    }

    /**
     * Set ansichtId
     *
     * @param integer $ansichtId
     * @return LzLizenzen
     */
    public function setAnsichtId($ansichtId)
    {
        $this->ansichtId = $ansichtId;

        return $this;
    }

    /**
     * Get ansichtId
     *
     * @return integer 
     */
    public function getAnsichtId()
    {
        return $this->ansichtId;
    }

    /**
     * Set lizenzName
     *
     * @param string $lizenzName
     * @return LzLizenzen
     */
    public function setLizenzName($lizenzName)
    {
        $this->lizenzName = $lizenzName;

        return $this;
    }

    /**
     * Get lizenzName
     *
     * @return string 
     */
    public function getLizenzName()
    {
        return $this->lizenzName;
    }

    /**
     * Set lizenzBeschreibung
     *
     * @param string $lizenzBeschreibung
     * @return LzLizenzen
     */
    public function setLizenzBeschreibung($lizenzBeschreibung)
    {
        $this->lizenzBeschreibung = $lizenzBeschreibung;

        return $this;
    }

    /**
     * Get lizenzBeschreibung
     *
     * @return string 
     */
    public function getLizenzBeschreibung()
    {
        return $this->lizenzBeschreibung;
    }

    /**
     * Set lizenzPreis
     *
     * @param string $lizenzPreis
     * @return LzLizenzen
     */
    public function setLizenzPreis($lizenzPreis)
    {
        $this->lizenzPreis = $lizenzPreis;

        return $this;
    }

    /**
     * Get lizenzPreis
     *
     * @return string 
     */
    public function getLizenzPreis()
    {
        return $this->lizenzPreis;
    }

    /**
     * Set typId
     *
     * @param integer $typId
     * @return LzLizenzen
     */
    public function setTypId($typId)
    {
        $this->typId = $typId;

        return $this;
    }

    /**
     * Get typId
     *
     * @return integer 
     */
    public function getTypId()
    {
        return $this->typId;
    }

    /**
     * Set lizenzKeysZeigen
     *
     * @param integer $lizenzKeysZeigen
     * @return LzLizenzen
     */
    public function setLizenzKeysZeigen($lizenzKeysZeigen)
    {
        $this->lizenzKeysZeigen = $lizenzKeysZeigen;

        return $this;
    }

    /**
     * Get lizenzKeysZeigen
     *
     * @return integer 
     */
    public function getLizenzKeysZeigen()
    {
        return $this->lizenzKeysZeigen;
    }

    /**
     * Set lizenzEventCatId
     *
     * @param integer $lizenzEventCatId
     * @return LzLizenzen
     */
    public function setLizenzEventCatId($lizenzEventCatId)
    {
        $this->lizenzEventCatId = $lizenzEventCatId;

        return $this;
    }

    /**
     * Get lizenzEventCatId
     *
     * @return integer 
     */
    public function getLizenzEventCatId()
    {
        return $this->lizenzEventCatId;
    }

    /**
     * Set lizenzEventMenge
     *
     * @param integer $lizenzEventMenge
     * @return LzLizenzen
     */
    public function setLizenzEventMenge($lizenzEventMenge)
    {
        $this->lizenzEventMenge = $lizenzEventMenge;

        return $this;
    }

    /**
     * Get lizenzEventMenge
     *
     * @return integer 
     */
    public function getLizenzEventMenge()
    {
        return $this->lizenzEventMenge;
    }

    /**
     * Set lizenzDauer
     *
     * @param string $lizenzDauer
     * @return LzLizenzen
     */
    public function setLizenzDauer($lizenzDauer)
    {
        $this->lizenzDauer = $lizenzDauer;

        return $this;
    }

    /**
     * Get lizenzDauer
     *
     * @return string 
     */
    public function getLizenzDauer()
    {
        return $this->lizenzDauer;
    }

    /**
     * Set lizenzAbo
     *
     * @param integer $lizenzAbo
     * @return LzLizenzen
     */
    public function setLizenzAbo($lizenzAbo)
    {
        $this->lizenzAbo = $lizenzAbo;

        return $this;
    }

    /**
     * Get lizenzAbo
     *
     * @return integer 
     */
    public function getLizenzAbo()
    {
        return $this->lizenzAbo;
    }

    /**
     * Get lizenzId
     *
     * @return integer 
     */
    public function getLizenzId()
    {
        return $this->lizenzId;
    }
}
