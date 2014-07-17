<?php

namespace Vest\ResponsaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FormbValidierungen
 */
class FormbValidierungen
{
    /**
     * @var string
     */
    private $validierungName;

    /**
     * @var string
     */
    private $validierungBeschreibung;

    /**
     * @var string
     */
    private $validierungKlasse;

    /**
     * @var string
     */
    private $validierungMethode;

    /**
     * @var integer
     */
    private $validierungId;


    /**
     * Set validierungName
     *
     * @param string $validierungName
     * @return FormbValidierungen
     */
    public function setValidierungName($validierungName)
    {
        $this->validierungName = $validierungName;

        return $this;
    }

    /**
     * Get validierungName
     *
     * @return string 
     */
    public function getValidierungName()
    {
        return $this->validierungName;
    }

    /**
     * Set validierungBeschreibung
     *
     * @param string $validierungBeschreibung
     * @return FormbValidierungen
     */
    public function setValidierungBeschreibung($validierungBeschreibung)
    {
        $this->validierungBeschreibung = $validierungBeschreibung;

        return $this;
    }

    /**
     * Get validierungBeschreibung
     *
     * @return string 
     */
    public function getValidierungBeschreibung()
    {
        return $this->validierungBeschreibung;
    }

    /**
     * Set validierungKlasse
     *
     * @param string $validierungKlasse
     * @return FormbValidierungen
     */
    public function setValidierungKlasse($validierungKlasse)
    {
        $this->validierungKlasse = $validierungKlasse;

        return $this;
    }

    /**
     * Get validierungKlasse
     *
     * @return string 
     */
    public function getValidierungKlasse()
    {
        return $this->validierungKlasse;
    }

    /**
     * Set validierungMethode
     *
     * @param string $validierungMethode
     * @return FormbValidierungen
     */
    public function setValidierungMethode($validierungMethode)
    {
        $this->validierungMethode = $validierungMethode;

        return $this;
    }

    /**
     * Get validierungMethode
     *
     * @return string 
     */
    public function getValidierungMethode()
    {
        return $this->validierungMethode;
    }

    /**
     * Get validierungId
     *
     * @return integer 
     */
    public function getValidierungId()
    {
        return $this->validierungId;
    }
}
