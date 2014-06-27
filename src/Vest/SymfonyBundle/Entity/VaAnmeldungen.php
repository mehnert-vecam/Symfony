<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VaAnmeldungen
 *
 * @ORM\Table(name="va_anmeldungen")
 * @ORM\Entity
 */
class VaAnmeldungen
{
    /**
     * @var integer
     *
     * @ORM\Column(name="person_id", type="integer", nullable=true)
     */
    private $personId;

    /**
     * @var string
     *
     * @ORM\Column(name="event", type="string", length=200, nullable=false)
     */
    private $event;

    /**
     * @var integer
     *
     * @ORM\Column(name="datum_id", type="integer", nullable=true)
     */
    private $datumId;

    /**
     * @var integer
     *
     * @ORM\Column(name="flatrate_id", type="bigint", nullable=false)
     */
    private $flatrateId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="anmeldungen_besuch", type="boolean", nullable=false)
     */
    private $anmeldungenBesuch;

    /**
     * @var boolean
     *
     * @ORM\Column(name="anmeldungen_isReg", type="boolean", nullable=false)
     */
    private $anmeldungenIsreg;

    /**
     * @var integer
     *
     * @ORM\Column(name="anmeldung_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $anmeldungId;



    /**
     * Set personId
     *
     * @param integer $personId
     * @return VaAnmeldungen
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
     * Set event
     *
     * @param string $event
     * @return VaAnmeldungen
     */
    public function setEvent($event)
    {
        $this->event = $event;

        return $this;
    }

    /**
     * Get event
     *
     * @return string 
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Set datumId
     *
     * @param integer $datumId
     * @return VaAnmeldungen
     */
    public function setDatumId($datumId)
    {
        $this->datumId = $datumId;

        return $this;
    }

    /**
     * Get datumId
     *
     * @return integer 
     */
    public function getDatumId()
    {
        return $this->datumId;
    }

    /**
     * Set flatrateId
     *
     * @param integer $flatrateId
     * @return VaAnmeldungen
     */
    public function setFlatrateId($flatrateId)
    {
        $this->flatrateId = $flatrateId;

        return $this;
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

    /**
     * Set anmeldungenBesuch
     *
     * @param boolean $anmeldungenBesuch
     * @return VaAnmeldungen
     */
    public function setAnmeldungenBesuch($anmeldungenBesuch)
    {
        $this->anmeldungenBesuch = $anmeldungenBesuch;

        return $this;
    }

    /**
     * Get anmeldungenBesuch
     *
     * @return boolean 
     */
    public function getAnmeldungenBesuch()
    {
        return $this->anmeldungenBesuch;
    }

    /**
     * Set anmeldungenIsreg
     *
     * @param boolean $anmeldungenIsreg
     * @return VaAnmeldungen
     */
    public function setAnmeldungenIsreg($anmeldungenIsreg)
    {
        $this->anmeldungenIsreg = $anmeldungenIsreg;

        return $this;
    }

    /**
     * Get anmeldungenIsreg
     *
     * @return boolean 
     */
    public function getAnmeldungenIsreg()
    {
        return $this->anmeldungenIsreg;
    }

    /**
     * Get anmeldungId
     *
     * @return integer 
     */
    public function getAnmeldungId()
    {
        return $this->anmeldungId;
    }
}
