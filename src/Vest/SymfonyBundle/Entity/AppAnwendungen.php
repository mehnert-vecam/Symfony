<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AppAnwendungen
 *
 * @ORM\Table(name="app_anwendungen")
 * @ORM\Entity
 */
class AppAnwendungen
{
    /**
     * @var string
     *
     * @ORM\Column(name="anwendung_name", type="string", length=255, nullable=false)
     */
    private $anwendungName;

    /**
     * @var string
     *
     * @ORM\Column(name="anwendung_beschreibung", type="text", nullable=false)
     */
    private $anwendungBeschreibung;

    /**
     * @var string
     *
     * @ORM\Column(name="anwendung_kurzname", type="string", length=255, nullable=false)
     */
    private $anwendungKurzname;

    /**
     * @var integer
     *
     * @ORM\Column(name="anwendung_uber_id", type="integer", nullable=false)
     */
    private $anwendungUberId;

    /**
     * @var integer
     *
     * @ORM\Column(name="anwendung_anzeige_prio", type="integer", nullable=false)
     */
    private $anwendungAnzeigePrio;

    /**
     * @var string
     *
     * @ORM\Column(name="anwendung_farbcode", type="string", length=255, nullable=false)
     */
    private $anwendungFarbcode;

    /**
     * @var string
     *
     * @ORM\Column(name="anwendung_icon", type="string", length=255, nullable=false)
     */
    private $anwendungIcon;

    /**
     * @var integer
     *
     * @ORM\Column(name="anwendung_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $anwendungId;



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

    /**
     * Get anwendungId
     *
     * @return integer 
     */
    public function getAnwendungId()
    {
        return $this->anwendungId;
    }
}
