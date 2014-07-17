<?php

namespace Vest\ResponsaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Resantwort
 *
 * @ORM\Table(name="resantwort")
 * @ORM\Entity
 */
class Resantwort
{
    /**
     * @var integer
     *
     * @ORM\Column(name="f_id", type="integer", nullable=false)
     */
    private $fId;

    /**
     * @var string
     *
     * @ORM\Column(name="antwort", type="text", nullable=false)
     */
    private $antwort;

    /**
     * @var string
     *
     * @ORM\Column(name="auswertungsbereich", type="text", nullable=true)
     */
    private $auswertungsbereich;

    /**
     * @var integer
     *
     * @ORM\Column(name="f_type", type="integer", nullable=false)
     */
    private $fType;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set fId
     *
     * @param integer $fId
     * @return Resantwort
     */
    public function setFId($fId)
    {
        $this->fId = $fId;

        return $this;
    }

    /**
     * Get fId
     *
     * @return integer 
     */
    public function getFId()
    {
        return $this->fId;
    }

    /**
     * Set antwort
     *
     * @param string $antwort
     * @return Resantwort
     */
    public function setAntwort($antwort)
    {
        $this->antwort = $antwort;

        return $this;
    }

    /**
     * Get antwort
     *
     * @return string 
     */
    public function getAntwort()
    {
        return $this->antwort;
    }

    /**
     * Set auswertungsbereich
     *
     * @param string $auswertungsbereich
     * @return Resantwort
     */
    public function setAuswertungsbereich($auswertungsbereich)
    {
        $this->auswertungsbereich = $auswertungsbereich;

        return $this;
    }

    /**
     * Get auswertungsbereich
     *
     * @return string 
     */
    public function getAuswertungsbereich()
    {
        return $this->auswertungsbereich;
    }

    /**
     * Set fType
     *
     * @param integer $fType
     * @return Resantwort
     */
    public function setFType($fType)
    {
        $this->fType = $fType;

        return $this;
    }

    /**
     * Get fType
     *
     * @return integer 
     */
    public function getFType()
    {
        return $this->fType;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
