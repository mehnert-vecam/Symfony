<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FormbValidierungen
 *
 * @ORM\Table(name="formb_validierungen")
 * @ORM\Entity
 */
class FormbValidierungen
{
    /**
     * @var string
     *
     * @ORM\Column(name="validierung_name", type="string", length=255, nullable=false)
     */
    private $validierungName;

    /**
     * @var string
     *
     * @ORM\Column(name="validierung_beschreibung", type="text", nullable=false)
     */
    private $validierungBeschreibung;

    /**
     * @var string
     *
     * @ORM\Column(name="validierung_klasse", type="string", length=255, nullable=false)
     */
    private $validierungKlasse;

    /**
     * @var string
     *
     * @ORM\Column(name="validierung_methode", type="string", length=255, nullable=false)
     */
    private $validierungMethode;

    /**
     * @var integer
     *
     * @ORM\Column(name="validierung_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
