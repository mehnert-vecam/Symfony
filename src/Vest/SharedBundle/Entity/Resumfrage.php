<?php

namespace Vest\SharedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Resumfrage
 */
class Resumfrage
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $feld1;

    /**
     * @var string
     */
    private $feld2;

    /**
     * @var string
     */
    private $feld3;

    /**
     * @var string
     */
    private $feld4;

    /**
     * @var string
     */
    private $feld5;

    /**
     * @var string
     */
    private $auswertungsbereich1;

    /**
     * @var string
     */
    private $auswertungsbereich2;

    /**
     * @var string
     */
    private $auswertungsbereich3;

    /**
     * @var string
     */
    private $auswertungsbereich4;

    /**
     * @var string
     */
    private $auswertungsbereich5;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Resumfrage
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set feld1
     *
     * @param string $feld1
     * @return Resumfrage
     */
    public function setFeld1($feld1)
    {
        $this->feld1 = $feld1;

        return $this;
    }

    /**
     * Get feld1
     *
     * @return string 
     */
    public function getFeld1()
    {
        return $this->feld1;
    }

    /**
     * Set feld2
     *
     * @param string $feld2
     * @return Resumfrage
     */
    public function setFeld2($feld2)
    {
        $this->feld2 = $feld2;

        return $this;
    }

    /**
     * Get feld2
     *
     * @return string 
     */
    public function getFeld2()
    {
        return $this->feld2;
    }

    /**
     * Set feld3
     *
     * @param string $feld3
     * @return Resumfrage
     */
    public function setFeld3($feld3)
    {
        $this->feld3 = $feld3;

        return $this;
    }

    /**
     * Get feld3
     *
     * @return string 
     */
    public function getFeld3()
    {
        return $this->feld3;
    }

    /**
     * Set feld4
     *
     * @param string $feld4
     * @return Resumfrage
     */
    public function setFeld4($feld4)
    {
        $this->feld4 = $feld4;

        return $this;
    }

    /**
     * Get feld4
     *
     * @return string 
     */
    public function getFeld4()
    {
        return $this->feld4;
    }

    /**
     * Set feld5
     *
     * @param string $feld5
     * @return Resumfrage
     */
    public function setFeld5($feld5)
    {
        $this->feld5 = $feld5;

        return $this;
    }

    /**
     * Get feld5
     *
     * @return string 
     */
    public function getFeld5()
    {
        return $this->feld5;
    }

    /**
     * Set auswertungsbereich1
     *
     * @param string $auswertungsbereich1
     * @return Resumfrage
     */
    public function setAuswertungsbereich1($auswertungsbereich1)
    {
        $this->auswertungsbereich1 = $auswertungsbereich1;

        return $this;
    }

    /**
     * Get auswertungsbereich1
     *
     * @return string 
     */
    public function getAuswertungsbereich1()
    {
        return $this->auswertungsbereich1;
    }

    /**
     * Set auswertungsbereich2
     *
     * @param string $auswertungsbereich2
     * @return Resumfrage
     */
    public function setAuswertungsbereich2($auswertungsbereich2)
    {
        $this->auswertungsbereich2 = $auswertungsbereich2;

        return $this;
    }

    /**
     * Get auswertungsbereich2
     *
     * @return string 
     */
    public function getAuswertungsbereich2()
    {
        return $this->auswertungsbereich2;
    }

    /**
     * Set auswertungsbereich3
     *
     * @param string $auswertungsbereich3
     * @return Resumfrage
     */
    public function setAuswertungsbereich3($auswertungsbereich3)
    {
        $this->auswertungsbereich3 = $auswertungsbereich3;

        return $this;
    }

    /**
     * Get auswertungsbereich3
     *
     * @return string 
     */
    public function getAuswertungsbereich3()
    {
        return $this->auswertungsbereich3;
    }

    /**
     * Set auswertungsbereich4
     *
     * @param string $auswertungsbereich4
     * @return Resumfrage
     */
    public function setAuswertungsbereich4($auswertungsbereich4)
    {
        $this->auswertungsbereich4 = $auswertungsbereich4;

        return $this;
    }

    /**
     * Get auswertungsbereich4
     *
     * @return string 
     */
    public function getAuswertungsbereich4()
    {
        return $this->auswertungsbereich4;
    }

    /**
     * Set auswertungsbereich5
     *
     * @param string $auswertungsbereich5
     * @return Resumfrage
     */
    public function setAuswertungsbereich5($auswertungsbereich5)
    {
        $this->auswertungsbereich5 = $auswertungsbereich5;

        return $this;
    }

    /**
     * Get auswertungsbereich5
     *
     * @return string 
     */
    public function getAuswertungsbereich5()
    {
        return $this->auswertungsbereich5;
    }
}
