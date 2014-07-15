<?php

namespace Vest\SharedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * AddrPersonen
 */
class AddrPersonen
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $kontaktId;

    /**
     * @var string
     */
    private $personAnrede;

    /**
     * @var string
     */
    private $personTitel;

    /**
     * @var string
     */
    private $personVorname;

    /**
     * @var string
     */
    private $personName;

    /**
     * @var string
     */
    private $personBriefanrede;

    /**
     * @var string
     */
    private $personZhanrede;

    /**
     * @var string
     */
    private $personTelefon;

    /**
     * @var string
     */
    private $personEmail;

    /**
     * @var string
     */
    private $personMobil;

    /**
     * @var string
     */
    private $personPass;

    /**
     * @var \DateTime
     */
    private $personAktualisiert;

    /**
     * @var boolean
     */
    private $recordStatus;

    private $kontakt;

    private $rollen;

    private $gruppen;


    public function __construct()
    {
        $this->gruppen = new ArrayCollection();
        $this->rollen = new ArrayCollection();
    }

    /**
     * @param mixed $kontakt
     */
    public function setKontakt($kontakt)
    {
        $this->kontakt = $kontakt;
    }

    /**
     * @return mixed
     */
    public function getKontakt()
    {
        return $this->kontakt;
    }

    /**
     * Get personId
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set kontaktId
     *
     * @param integer $kontaktId
     * @return AddrPersonen
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
     * Set personAnrede
     *
     * @param string $personAnrede
     * @return AddrPersonen
     */
    public function setPersonAnrede($personAnrede)
    {
        $this->personAnrede = $personAnrede;

        return $this;
    }

    /**
     * Get personAnrede
     *
     * @return string 
     */
    public function getPersonAnrede()
    {
        return $this->personAnrede;
    }

    /**
     * Set personTitel
     *
     * @param string $personTitel
     * @return AddrPersonen
     */
    public function setPersonTitel($personTitel)
    {
        $this->personTitel = $personTitel;

        return $this;
    }

    /**
     * Get personTitel
     *
     * @return string 
     */
    public function getPersonTitel()
    {
        return $this->personTitel;
    }

    /**
     * Set personVorname
     *
     * @param string $personVorname
     * @return AddrPersonen
     */
    public function setPersonVorname($personVorname)
    {
        $this->personVorname = $personVorname;

        return $this;
    }

    /**
     * Get personVorname
     *
     * @return string 
     */
    public function getPersonVorname()
    {
        return $this->personVorname;
    }

    /**
     * Set personName
     *
     * @param string $personName
     * @return AddrPersonen
     */
    public function setPersonName($personName)
    {
        $this->personName = $personName;

        return $this;
    }

    /**
     * Get personName
     *
     * @return string 
     */
    public function getPersonName()
    {
        return $this->personName;
    }

    /**
     * Set personBriefanrede
     *
     * @param string $personBriefanrede
     * @return AddrPersonen
     */
    public function setPersonBriefanrede($personBriefanrede)
    {
        $this->personBriefanrede = $personBriefanrede;

        return $this;
    }

    /**
     * Get personBriefanrede
     *
     * @return string 
     */
    public function getPersonBriefanrede()
    {
        return $this->personBriefanrede;
    }

    /**
     * Set personZhanrede
     *
     * @param string $personZhanrede
     * @return AddrPersonen
     */
    public function setPersonZhanrede($personZhanrede)
    {
        $this->personZhanrede = $personZhanrede;

        return $this;
    }

    /**
     * Get personZhanrede
     *
     * @return string 
     */
    public function getPersonZhanrede()
    {
        return $this->personZhanrede;
    }

    /**
     * Set personTelefon
     *
     * @param string $personTelefon
     * @return AddrPersonen
     */
    public function setPersonTelefon($personTelefon)
    {
        $this->personTelefon = $personTelefon;

        return $this;
    }

    /**
     * Get personTelefon
     *
     * @return string 
     */
    public function getPersonTelefon()
    {
        return $this->personTelefon;
    }

    /**
     * Set personEmail
     *
     * @param string $personEmail
     * @return AddrPersonen
     */
    public function setPersonEmail($personEmail)
    {
        $this->personEmail = $personEmail;

        return $this;
    }

    /**
     * Get personEmail
     *
     * @return string 
     */
    public function getPersonEmail()
    {
        return $this->personEmail;
    }

    /**
     * Set personMobil
     *
     * @param string $personMobil
     * @return AddrPersonen
     */
    public function setPersonMobil($personMobil)
    {
        $this->personMobil = $personMobil;

        return $this;
    }

    /**
     * Get personMobil
     *
     * @return string 
     */
    public function getPersonMobil()
    {
        return $this->personMobil;
    }

    /**
     * Set personPass
     *
     * @param string $personPass
     * @return AddrPersonen
     */
    public function setPersonPass($personPass)
    {
        $this->personPass = $personPass;

        return $this;
    }

    /**
     * Get personPass
     *
     * @return string 
     */
    public function getPersonPass()
    {
        return $this->personPass;
    }

    /**
     * Set personAktualisiert
     *
     * @param \DateTime $personAktualisiert
     * @return AddrPersonen
     */
    public function setPersonAktualisiert($personAktualisiert)
    {
        $this->personAktualisiert = $personAktualisiert;

        return $this;
    }

    /**
     * Get personAktualisiert
     *
     * @return \DateTime 
     */
    public function getPersonAktualisiert()
    {
        return $this->personAktualisiert;
    }

    /**
     * Set recordStatus
     *
     * @param boolean $recordStatus
     * @return AddrPersonen
     */
    public function setRecordStatus($recordStatus)
    {
        $this->recordStatus = $recordStatus;

        return $this;
    }

    /**
     * Get recordStatus
     *
     * @return boolean 
     */
    public function getRecordStatus()
    {
        return $this->recordStatus;
    }

    /**
     * @param mixed $gruppen
     */
    public function setGruppen($gruppen)
    {
        $this->gruppen = $gruppen;
    }

    /**
     * @return mixed
     */
    public function getGruppen()
    {
        return $this->gruppen;
    }

    /**
     * @param mixed $rollen
     */
    public function setRollen($rollen)
    {
        $this->rollen = $rollen;
    }

    /**
     * @return mixed
     */
    public function getRollen()
    {
        return $this->rollen;
    }

}
