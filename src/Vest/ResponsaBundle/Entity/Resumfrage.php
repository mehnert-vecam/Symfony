<?php

namespace Vest\ResponsaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResUmfrage
 */
class ResUmfrage
{
    /**
     * @var string
     */
    private $danketext;

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
     * @var string
     */
    private $einleitungstext;

    /**
     * @var integer
     */
    private $teilnehmerzahl;

    /**
     * @var integer
     */
    private $kontaktId;

    /**
     * @var string
     */
    private $farbe1;

    /**
     * @var string
     */
    private $farbe2;

    /**
     * @var string
     */
    private $farbe4;

    /**
     * @var string
     */
    private $bild;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set danketext
     *
     * @param string $danketext
     * @return ResUmfrage
     */
    public function setDanketext($danketext)
    {
        $this->danketext = $danketext;

        return $this;
    }

    /**
     * Get danketext
     *
     * @return string 
     */
    public function getDanketext()
    {
        return $this->danketext;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return ResUmfrage
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
     * @return ResUmfrage
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
     * @return ResUmfrage
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
     * @return ResUmfrage
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
     * @return ResUmfrage
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
     * @return ResUmfrage
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
     * @return ResUmfrage
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
     * @return ResUmfrage
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
     * @return ResUmfrage
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
     * @return ResUmfrage
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
     * @return ResUmfrage
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

    /**
     * Set einleitungstext
     *
     * @param string $einleitungstext
     * @return ResUmfrage
     */
    public function setEinleitungstext($einleitungstext)
    {
        $this->einleitungstext = $einleitungstext;

        return $this;
    }

    /**
     * Get einleitungstext
     *
     * @return string 
     */
    public function getEinleitungstext()
    {
        return $this->einleitungstext;
    }

    /**
     * Set teilnehmerzahl
     *
     * @param integer $teilnehmerzahl
     * @return ResUmfrage
     */
    public function setTeilnehmerzahl($teilnehmerzahl)
    {
        $this->teilnehmerzahl = $teilnehmerzahl;

        return $this;
    }

    /**
     * Get teilnehmerzahl
     *
     * @return integer 
     */
    public function getTeilnehmerzahl()
    {
        return $this->teilnehmerzahl;
    }

    /**
     * Set kontaktId
     *
     * @param integer $kontaktId
     * @return ResUmfrage
     */
    public function setKontaktId($kontaktId)
    {
        $this->kontaktId = $kontaktId;

        return $this;
    }

    /**
     * Get kontaktId
     *
     * @return integer 
     */
    public function getKontaktId()
    {
        return $this->kontaktId;
    }

    /**
     * Set farbe1
     *
     * @param string $farbe1
     * @return ResUmfrage
     */
    public function setFarbe1($farbe1)
    {
        $this->farbe1 = $farbe1;

        return $this;
    }

    /**
     * Get farbe1
     *
     * @return string 
     */
    public function getFarbe1()
    {
        return $this->farbe1;
    }

    /**
     * Set farbe2
     *
     * @param string $farbe2
     * @return ResUmfrage
     */
    public function setFarbe2($farbe2)
    {
        $this->farbe2 = $farbe2;

        return $this;
    }

    /**
     * Get farbe2
     *
     * @return string 
     */
    public function getFarbe2()
    {
        return $this->farbe2;
    }

    /**
     * Set farbe4
     *
     * @param string $farbe4
     * @return ResUmfrage
     */
    public function setFarbe4($farbe4)
    {
        $this->farbe4 = $farbe4;

        return $this;
    }

    /**
     * Get farbe4
     *
     * @return string 
     */
    public function getFarbe4()
    {
        return $this->farbe4;
    }

    /**
     * Set bild
     *
     * @param string $bild
     * @return ResUmfrage
     */
    public function setBild($bild)
    {
        $this->bild = $bild;

        return $this;
    }

    /**
     * Get bild
     *
     * @return string 
     */
    public function getBild()
    {
        return $this->bild;
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
