<?php

namespace Vest\ResponsaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Resumfrage
 *
 * @ORM\Table(name="resumfrage", uniqueConstraints={@ORM\UniqueConstraint(name="name", columns={"name"})})
 * @ORM\Entity
 */
class Resumfrage
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="feld1", type="string", length=100, nullable=true)
     */
    private $feld1;

    /**
     * @var string
     *
     * @ORM\Column(name="feld2", type="string", length=100, nullable=true)
     */
    private $feld2;

    /**
     * @var string
     *
     * @ORM\Column(name="feld3", type="string", length=100, nullable=true)
     */
    private $feld3;

    /**
     * @var string
     *
     * @ORM\Column(name="feld4", type="string", length=100, nullable=true)
     */
    private $feld4;

    /**
     * @var string
     *
     * @ORM\Column(name="feld5", type="string", length=100, nullable=true)
     */
    private $feld5;

    /**
     * @var string
     *
     * @ORM\Column(name="auswertungsbereich1", type="string", length=100, nullable=true)
     */
    private $auswertungsbereich1;

    /**
     * @var string
     *
     * @ORM\Column(name="auswertungsbereich2", type="string", length=100, nullable=true)
     */
    private $auswertungsbereich2;

    /**
     * @var string
     *
     * @ORM\Column(name="auswertungsbereich3", type="string", length=100, nullable=true)
     */
    private $auswertungsbereich3;

    /**
     * @var string
     *
     * @ORM\Column(name="auswertungsbereich4", type="string", length=100, nullable=true)
     */
    private $auswertungsbereich4;

    /**
     * @var string
     *
     * @ORM\Column(name="auswertungsbereich5", type="string", length=100, nullable=true)
     */
    private $auswertungsbereich5;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



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
     * @var string
     */
    private $einleitungstext;

    /**
     * @var integer
     */
    private $teilnehmertzahl;


    /**
     * Set einleitungstext
     *
     * @param string $einleitungstext
     * @return Resumfrage
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
     * Set teilnehmertzahl
     *
     * @param integer $teilnehmertzahl
     * @return Resumfrage
     */
    public function setTeilnehmertzahl($teilnehmertzahl)
    {
        $this->teilnehmertzahl = $teilnehmertzahl;

        return $this;
    }

    /**
     * Get teilnehmertzahl
     *
     * @return integer 
     */
    public function getTeilnehmertzahl()
    {
        return $this->teilnehmertzahl;
    }
    /**
     * @var integer
     */
    private $teilnehmerzahl;


    /**
     * Set teilnehmerzahl
     *
     * @param integer $teilnehmerzahl
     * @return Resumfrage
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
     * @var integer
     */
    private $ersteller;


    /**
     * Set ersteller
     *
     * @param integer $ersteller
     * @return Resumfrage
     */
    public function setErsteller($ersteller)
    {
        $this->ersteller = $ersteller;

        return $this;
    }

    /**
     * Get ersteller
     *
     * @return integer 
     */
    public function getErsteller()
    {
        return $this->ersteller;
    }
    /**
     * @var integer
     */
    private $kontaktId;


    /**
     * Set kontaktId
     *
     * @param integer $kontaktId
     * @return Resumfrage
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
     * @var string
     */
    private $danketext;


    /**
     * Set danketext
     *
     * @param string $danketext
     * @return Resumfrage
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
     * Set farbe1
     *
     * @param string $farbe1
     * @return Resumfrage
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
     * @return Resumfrage
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
     * @return Resumfrage
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
     * @return Resumfrage
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
}
