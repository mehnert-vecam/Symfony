<?php

namespace Vest\SharedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UfFragen
 */
class UfFragen
{
    /**
     * @var integer
     */
    private $frageId;

    /**
     * @var integer
     */
    private $umfrageId;

    /**
     * @var string
     */
    private $frageText;

    /**
     * @var integer
     */
    private $frageTyp;

    /**
     * @var integer
     */
    private $fragePrio;


    /**
     * Get frageId
     *
     * @return integer 
     */
    public function getFrageId()
    {
        return $this->frageId;
    }

    /**
     * Set umfrageId
     *
     * @param integer $umfrageId
     * @return UfFragen
     */
    public function setUmfrageId($umfrageId)
    {
        $this->umfrageId = $umfrageId;

        return $this;
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

    /**
     * Set frageText
     *
     * @param string $frageText
     * @return UfFragen
     */
    public function setFrageText($frageText)
    {
        $this->frageText = $frageText;

        return $this;
    }

    /**
     * Get frageText
     *
     * @return string 
     */
    public function getFrageText()
    {
        return $this->frageText;
    }

    /**
     * Set frageTyp
     *
     * @param integer $frageTyp
     * @return UfFragen
     */
    public function setFrageTyp($frageTyp)
    {
        $this->frageTyp = $frageTyp;

        return $this;
    }

    /**
     * Get frageTyp
     *
     * @return integer 
     */
    public function getFrageTyp()
    {
        return $this->frageTyp;
    }

    /**
     * Set fragePrio
     *
     * @param integer $fragePrio
     * @return UfFragen
     */
    public function setFragePrio($fragePrio)
    {
        $this->fragePrio = $fragePrio;

        return $this;
    }

    /**
     * Get fragePrio
     *
     * @return integer 
     */
    public function getFragePrio()
    {
        return $this->fragePrio;
    }
}
