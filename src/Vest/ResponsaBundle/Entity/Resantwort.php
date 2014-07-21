<?php

namespace Vest\ResponsaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResAntwort
 */
class ResAntwort
{
    /**
     * @var integer
     */
    private $fId;

    /**
     * @var integer
     */
    private $uId;

    /**
     * @var string
     */
    private $antwort;

    /**
     * @var string
     */
    private $auswertungsbereich;

    /**
     * @var integer
     */
    private $fType;

    /**
     * @var \DateTime
     */
    private $datum;

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
    private $token;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set fId
     *
     * @param integer $fId
     * @return ResAntwort
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
     * Set uId
     *
     * @param integer $uId
     * @return ResAntwort
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
     * Set antwort
     *
     * @param string $antwort
     * @return ResAntwort
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
     * @return ResAntwort
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
     * @return ResAntwort
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
     * Set datum
     *
     * @param \DateTime $datum
     * @return ResAntwort
     */
    public function setDatum()
    {
        $this->datum = new \DateTime;

        return $this;
    }

    /**
     * Get datum
     *
     * @return \DateTime 
     */
    public function getDatum()
    {
        return $this->datum;
    }

    /**
     * Set feld1
     *
     * @param string $feld1
     * @return ResAntwort
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
     * @return ResAntwort
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
     * @return ResAntwort
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
     * @return ResAntwort
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
     * @return ResAntwort
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
     * Set token
     *
     * @param string $token
     * @return ResAntwort
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string 
     */
    public function getToken()
    {
        return $this->token;
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
