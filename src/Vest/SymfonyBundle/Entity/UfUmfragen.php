<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UfUmfragen
 *
 * @ORM\Table(name="uf_umfragen")
 * @ORM\Entity
 */
class UfUmfragen
{
    /**
     * @var string
     *
     * @ORM\Column(name="umfrage_name", type="text", nullable=false)
     */
    private $umfrageName;

    /**
     * @var string
     *
     * @ORM\Column(name="umfrage_beschreibung", type="text", nullable=false)
     */
    private $umfrageBeschreibung;

    /**
     * @var string
     *
     * @ORM\Column(name="umfrage_typ", type="string", length=100, nullable=false)
     */
    private $umfrageTyp;

    /**
     * @var string
     *
     * @ORM\Column(name="lizenz_id", type="string", length=45, nullable=true)
     */
    private $lizenzId;

    /**
     * @var integer
     *
     * @ORM\Column(name="umfrage_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $umfrageId;



    /**
     * Set umfrageName
     *
     * @param string $umfrageName
     * @return UfUmfragen
     */
    public function setUmfrageName($umfrageName)
    {
        $this->umfrageName = $umfrageName;

        return $this;
    }

    /**
     * Get umfrageName
     *
     * @return string 
     */
    public function getUmfrageName()
    {
        return $this->umfrageName;
    }

    /**
     * Set umfrageBeschreibung
     *
     * @param string $umfrageBeschreibung
     * @return UfUmfragen
     */
    public function setUmfrageBeschreibung($umfrageBeschreibung)
    {
        $this->umfrageBeschreibung = $umfrageBeschreibung;

        return $this;
    }

    /**
     * Get umfrageBeschreibung
     *
     * @return string 
     */
    public function getUmfrageBeschreibung()
    {
        return $this->umfrageBeschreibung;
    }

    /**
     * Set umfrageTyp
     *
     * @param string $umfrageTyp
     * @return UfUmfragen
     */
    public function setUmfrageTyp($umfrageTyp)
    {
        $this->umfrageTyp = $umfrageTyp;

        return $this;
    }

    /**
     * Get umfrageTyp
     *
     * @return string 
     */
    public function getUmfrageTyp()
    {
        return $this->umfrageTyp;
    }

    /**
     * Set lizenzId
     *
     * @param string $lizenzId
     * @return UfUmfragen
     */
    public function setLizenzId($lizenzId)
    {
        $this->lizenzId = $lizenzId;

        return $this;
    }

    /**
     * Get lizenzId
     *
     * @return string 
     */
    public function getLizenzId()
    {
        return $this->lizenzId;
    }

    /**
     * Get umfrageId
     *
     * @return integer 
     */
    public function getUmfrageId()
    {
        return $this->umfrageId;
    }
}
