<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UfFragen
 *
 * @ORM\Table(name="uf_fragen")
 * @ORM\Entity
 */
class UfFragen
{
    /**
     * @var integer
     *
     * @ORM\Column(name="umfrage_id", type="bigint", nullable=false)
     */
    private $umfrageId;

    /**
     * @var string
     *
     * @ORM\Column(name="frage_text", type="text", nullable=false)
     */
    private $frageText;

    /**
     * @var integer
     *
     * @ORM\Column(name="frage_typ", type="integer", nullable=false)
     */
    private $frageTyp;

    /**
     * @var integer
     *
     * @ORM\Column(name="frage_prio", type="integer", nullable=false)
     */
    private $fragePrio;

    /**
     * @var integer
     *
     * @ORM\Column(name="frage_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $frageId;



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

    /**
     * Get frageId
     *
     * @return integer 
     */
    public function getFrageId()
    {
        return $this->frageId;
    }
}
