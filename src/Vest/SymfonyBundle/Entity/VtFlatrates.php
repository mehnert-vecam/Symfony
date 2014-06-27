<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VtFlatrates
 *
 * @ORM\Table(name="vt_flatrates")
 * @ORM\Entity
 */
class VtFlatrates
{
    /**
     * @var integer
     *
     * @ORM\Column(name="angebot_id", type="bigint", nullable=false)
     */
    private $angebotId;

    /**
     * @var string
     *
     * @ORM\Column(name="flatrate_code", type="string", length=50, nullable=false)
     */
    private $flatrateCode;

    /**
     * @var integer
     *
     * @ORM\Column(name="kontakt_id", type="bigint", nullable=false)
     */
    private $kontaktId;

    /**
     * @var integer
     *
     * @ORM\Column(name="person_id", type="bigint", nullable=false)
     */
    private $personId;

    /**
     * @var integer
     *
     * @ORM\Column(name="flatrate_kat", type="integer", nullable=false)
     */
    private $flatrateKat;

    /**
     * @var integer
     *
     * @ORM\Column(name="flatrate_nutzung", type="integer", nullable=false)
     */
    private $flatrateNutzung;

    /**
     * @var integer
     *
     * @ORM\Column(name="flatrate_anzahl", type="integer", nullable=false)
     */
    private $flatrateAnzahl;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="flatrate_start", type="datetime", nullable=false)
     */
    private $flatrateStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="flatrate_ende", type="datetime", nullable=false)
     */
    private $flatrateEnde;

    /**
     * @var boolean
     *
     * @ORM\Column(name="flatrate_unlimit", type="boolean", nullable=false)
     */
    private $flatrateUnlimit;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="flatratet_erstellen", type="datetime", nullable=false)
     */
    private $flatratetErstellen;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="flatrate_beenden", type="datetime", nullable=false)
     */
    private $flatrateBeenden;

    /**
     * @var integer
     *
     * @ORM\Column(name="flatrate_typ", type="integer", nullable=false)
     */
    private $flatrateTyp;

    /**
     * @var integer
     *
     * @ORM\Column(name="flatrate_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $flatrateId;



    /**
     * Set angebotId
     *
     * @param integer $angebotId
     * @return VtFlatrates
     */
    public function setAngebotId($angebotId)
    {
        $this->angebotId = $angebotId;

        return $this;
    }

    /**
     * Get angebotId
     *
     * @return integer 
     */
    public function getAngebotId()
    {
        return $this->angebotId;
    }

    /**
     * Set flatrateCode
     *
     * @param string $flatrateCode
     * @return VtFlatrates
     */
    public function setFlatrateCode($flatrateCode)
    {
        $this->flatrateCode = $flatrateCode;

        return $this;
    }

    /**
     * Get flatrateCode
     *
     * @return string 
     */
    public function getFlatrateCode()
    {
        return $this->flatrateCode;
    }

    /**
     * Set kontaktId
     *
     * @param integer $kontaktId
     * @return VtFlatrates
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
     * Set personId
     *
     * @param integer $personId
     * @return VtFlatrates
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
     * Set flatrateKat
     *
     * @param integer $flatrateKat
     * @return VtFlatrates
     */
    public function setFlatrateKat($flatrateKat)
    {
        $this->flatrateKat = $flatrateKat;

        return $this;
    }

    /**
     * Get flatrateKat
     *
     * @return integer 
     */
    public function getFlatrateKat()
    {
        return $this->flatrateKat;
    }

    /**
     * Set flatrateNutzung
     *
     * @param integer $flatrateNutzung
     * @return VtFlatrates
     */
    public function setFlatrateNutzung($flatrateNutzung)
    {
        $this->flatrateNutzung = $flatrateNutzung;

        return $this;
    }

    /**
     * Get flatrateNutzung
     *
     * @return integer 
     */
    public function getFlatrateNutzung()
    {
        return $this->flatrateNutzung;
    }

    /**
     * Set flatrateAnzahl
     *
     * @param integer $flatrateAnzahl
     * @return VtFlatrates
     */
    public function setFlatrateAnzahl($flatrateAnzahl)
    {
        $this->flatrateAnzahl = $flatrateAnzahl;

        return $this;
    }

    /**
     * Get flatrateAnzahl
     *
     * @return integer 
     */
    public function getFlatrateAnzahl()
    {
        return $this->flatrateAnzahl;
    }

    /**
     * Set flatrateStart
     *
     * @param \DateTime $flatrateStart
     * @return VtFlatrates
     */
    public function setFlatrateStart($flatrateStart)
    {
        $this->flatrateStart = $flatrateStart;

        return $this;
    }

    /**
     * Get flatrateStart
     *
     * @return \DateTime 
     */
    public function getFlatrateStart()
    {
        return $this->flatrateStart;
    }

    /**
     * Set flatrateEnde
     *
     * @param \DateTime $flatrateEnde
     * @return VtFlatrates
     */
    public function setFlatrateEnde($flatrateEnde)
    {
        $this->flatrateEnde = $flatrateEnde;

        return $this;
    }

    /**
     * Get flatrateEnde
     *
     * @return \DateTime 
     */
    public function getFlatrateEnde()
    {
        return $this->flatrateEnde;
    }

    /**
     * Set flatrateUnlimit
     *
     * @param boolean $flatrateUnlimit
     * @return VtFlatrates
     */
    public function setFlatrateUnlimit($flatrateUnlimit)
    {
        $this->flatrateUnlimit = $flatrateUnlimit;

        return $this;
    }

    /**
     * Get flatrateUnlimit
     *
     * @return boolean 
     */
    public function getFlatrateUnlimit()
    {
        return $this->flatrateUnlimit;
    }

    /**
     * Set flatratetErstellen
     *
     * @param \DateTime $flatratetErstellen
     * @return VtFlatrates
     */
    public function setFlatratetErstellen($flatratetErstellen)
    {
        $this->flatratetErstellen = $flatratetErstellen;

        return $this;
    }

    /**
     * Get flatratetErstellen
     *
     * @return \DateTime 
     */
    public function getFlatratetErstellen()
    {
        return $this->flatratetErstellen;
    }

    /**
     * Set flatrateBeenden
     *
     * @param \DateTime $flatrateBeenden
     * @return VtFlatrates
     */
    public function setFlatrateBeenden($flatrateBeenden)
    {
        $this->flatrateBeenden = $flatrateBeenden;

        return $this;
    }

    /**
     * Get flatrateBeenden
     *
     * @return \DateTime 
     */
    public function getFlatrateBeenden()
    {
        return $this->flatrateBeenden;
    }

    /**
     * Set flatrateTyp
     *
     * @param integer $flatrateTyp
     * @return VtFlatrates
     */
    public function setFlatrateTyp($flatrateTyp)
    {
        $this->flatrateTyp = $flatrateTyp;

        return $this;
    }

    /**
     * Get flatrateTyp
     *
     * @return integer 
     */
    public function getFlatrateTyp()
    {
        return $this->flatrateTyp;
    }

    /**
     * Get flatrateId
     *
     * @return integer 
     */
    public function getFlatrateId()
    {
        return $this->flatrateId;
    }
}
