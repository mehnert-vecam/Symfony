<?php

namespace Vest\SharedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * AppAnwendungen
 */
class AppAnwendungen
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $anwendungName;

    /**
     * @var string
     */
    private $anwendungBeschreibung;

    /**
     * @var string
     */
    private $anwendungKurzname;

    /**
     * @var integer
     */
    private $anwendungUberId;

    /**
     * @var integer
     */
    private $anwendungAnzeigePrio;

    /**
     * @var string
     */
    private $anwendungFarbcode;

    /**
     * @var string
     */
    private $anwendungIcon;

    private $ansichten;

    private $rollen;



    public function __construct()
    {
        $this->ansichten = new ArrayCollection();
        $this->rollen = new ArrayCollection();
    }
    /**
     * @param mixed $ansichten
     */
    public function setAnsichten($ansichten)
    {
        $this->ansichten = $ansichten;
    }

    /**
     * @return mixed
     */
    public function getAnsichten()
    {
        return $this->ansichten;
    }


    /**
     * Get anwendungId
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
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

    /**
     * Set anwendungName
     *
     * @param string $anwendungName
     * @return AppAnwendungen
     */
    public function setAnwendungName($anwendungName)
    {
        $this->anwendungName = $anwendungName;

        return $this;
    }

    /**
     * Get anwendungName
     *
     * @return string 
     */
    public function getAnwendungName()
    {
        return $this->anwendungName;
    }

    /**
     * Set anwendungBeschreibung
     *
     * @param string $anwendungBeschreibung
     * @return AppAnwendungen
     */
    public function setAnwendungBeschreibung($anwendungBeschreibung)
    {
        $this->anwendungBeschreibung = $anwendungBeschreibung;

        return $this;
    }

    /**
     * Get anwendungBeschreibung
     *
     * @return string 
     */
    public function getAnwendungBeschreibung()
    {
        return $this->anwendungBeschreibung;
    }

    /**
     * Set anwendungKurzname
     *
     * @param string $anwendungKurzname
     * @return AppAnwendungen
     */
    public function setAnwendungKurzname($anwendungKurzname)
    {
        $this->anwendungKurzname = $anwendungKurzname;

        return $this;
    }

    /**
     * Get anwendungKurzname
     *
     * @return string 
     */
    public function getAnwendungKurzname()
    {
        return $this->anwendungKurzname;
    }

    /**
     * Set anwendungUberId
     *
     * @param integer $anwendungUberId
     * @return AppAnwendungen
     */
    public function setAnwendungUberId($anwendungUberId)
    {
        $this->anwendungUberId = $anwendungUberId;

        return $this;
    }

    /**
     * Get anwendungUberId
     *
     * @return integer 
     */
    public function getAnwendungUberId()
    {
        return $this->anwendungUberId;
    }

    /**
     * Set anwendungAnzeigePrio
     *
     * @param integer $anwendungAnzeigePrio
     * @return AppAnwendungen
     */
    public function setAnwendungAnzeigePrio($anwendungAnzeigePrio)
    {
        $this->anwendungAnzeigePrio = $anwendungAnzeigePrio;

        return $this;
    }

    /**
     * Get anwendungAnzeigePrio
     *
     * @return integer 
     */
    public function getAnwendungAnzeigePrio()
    {
        return $this->anwendungAnzeigePrio;
    }

    /**
     * Set anwendungFarbcode
     *
     * @param string $anwendungFarbcode
     * @return AppAnwendungen
     */
    public function setAnwendungFarbcode($anwendungFarbcode)
    {
        $this->anwendungFarbcode = $anwendungFarbcode;

        return $this;
    }

    /**
     * Get anwendungFarbcode
     *
     * @return string 
     */
    public function getAnwendungFarbcode()
    {
        return $this->anwendungFarbcode;
    }

    /**
     * Set anwendungIcon
     *
     * @param string $anwendungIcon
     * @return AppAnwendungen
     */
    public function setAnwendungIcon($anwendungIcon)
    {
        $this->anwendungIcon = $anwendungIcon;

        return $this;
    }

    /**
     * Get anwendungIcon
     *
     * @return string 
     */
    public function getAnwendungIcon()
    {
        return $this->anwendungIcon;
    }
}
