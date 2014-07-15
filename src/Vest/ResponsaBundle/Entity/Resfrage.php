<?php

namespace Vest\ResponsaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Resfrage
 *
 * @ORM\Table(name="resfrage")
 * @ORM\Entity
 */
class Resfrage
{
    /**
     * @var integer
     *
     * @ORM\Column(name="u_id", type="integer", nullable=false)
     */
    private $uId;

    /**
     * @var string
     *
     * @ORM\Column(name="frage", type="text", nullable=false)
     */
    private $frage;

    /**
     * @var integer
     *
     * @ORM\Column(name="prio", type="integer", nullable=false)
     */
    private $prio;

    /**
     * @var string
     *
     * @ORM\Column(name="auswertungsbereich", type="string", length=100, nullable=false)
     */
    private $auswertungsbereich;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set uId
     *
     * @param integer $uId
     * @return Resfrage
     */
    public function setUId($uId)
    {
        $this->uId = $uId;

        return $this;
    }

    /**
     * Get uId
     *
     * @return integer 
     */
    public function getUId()
    {
        return $this->uId;
    }

    /**
     * Set frage
     *
     * @param string $frage
     * @return Resfrage
     */
    public function setFrage($frage)
    {
        $this->frage = $frage;

        return $this;
    }

    /**
     * Get frage
     *
     * @return string 
     */
    public function getFrage()
    {
        return $this->frage;
    }

    /**
     * Set prio
     *
     * @param integer $prio
     * @return Resfrage
     */
    public function setPrio($prio)
    {
        $this->prio = $prio;

        return $this;
    }

    /**
     * Get prio
     *
     * @return integer 
     */
    public function getPrio()
    {
        return $this->prio;
    }

    /**
     * Set auswertungsbereich
     *
     * @param string $auswertungsbereich
     * @return Resfrage
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
     * Set type
     *
     * @param integer $type
     * @return Resfrage
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
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
