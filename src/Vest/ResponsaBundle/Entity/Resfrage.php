<?php

namespace Vest\ResponsaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResFrage
 */
class ResFrage
{
    /**
     * @var integer
     */
    private $uId;

    /**
     * @var string
     */
    private $frage;

    /**
     * @var integer
     */
    private $prio;

    /**
     * @var string
     */
    private $auswertungsbereich;

    /**
     * @var integer
     */
    private $type;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set uId
     *
     * @param integer $uId
     * @return ResFrage
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
     * @return ResFrage
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
     * @return ResFrage
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
     * @return ResFrage
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
     * @return ResFrage
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
