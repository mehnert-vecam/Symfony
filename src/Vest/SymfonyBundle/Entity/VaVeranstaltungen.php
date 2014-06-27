<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VaVeranstaltungen
 *
 * @ORM\Table(name="va_veranstaltungen")
 * @ORM\Entity
 */
class VaVeranstaltungen
{
    /**
     * @var string
     *
     * @ORM\Column(name="veranstaltung_tag", type="string", length=255, nullable=false)
     */
    private $veranstaltungTag;

    /**
     * @var string
     *
     * @ORM\Column(name="veranstaltung_name", type="string", length=255, nullable=true)
     */
    private $veranstaltungName;

    /**
     * @var string
     *
     * @ORM\Column(name="veranstaltung_beschreibung", type="text", nullable=true)
     */
    private $veranstaltungBeschreibung;

    /**
     * @var integer
     *
     * @ORM\Column(name="kontakt_id", type="integer", nullable=false)
     */
    private $kontaktId;

    /**
     * @var integer
     *
     * @ORM\Column(name="kategorie_id", type="integer", nullable=false)
     */
    private $kategorieId;

    /**
     * @var integer
     *
     * @ORM\Column(name="veranstaltung_pdf_order", type="integer", nullable=false)
     */
    private $veranstaltungPdfOrder;

    /**
     * @var integer
     *
     * @ORM\Column(name="veranstaltungt_istpres", type="integer", nullable=false)
     */
    private $veranstaltungtIstpres;

    /**
     * @var string
     *
     * @ORM\Column(name="veranstaltung_tipp", type="string", length=10, nullable=false)
     */
    private $veranstaltungTipp;

    /**
     * @var string
     *
     * @ORM\Column(name="veranstaltung_neu", type="string", length=10, nullable=false)
     */
    private $veranstaltungNeu;

    /**
     * @var integer
     *
     * @ORM\Column(name="veranstaltung_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $veranstaltungId;



    /**
     * Set veranstaltungTag
     *
     * @param string $veranstaltungTag
     * @return VaVeranstaltungen
     */
    public function setVeranstaltungTag($veranstaltungTag)
    {
        $this->veranstaltungTag = $veranstaltungTag;

        return $this;
    }

    /**
     * Get veranstaltungTag
     *
     * @return string 
     */
    public function getVeranstaltungTag()
    {
        return $this->veranstaltungTag;
    }

    /**
     * Set veranstaltungName
     *
     * @param string $veranstaltungName
     * @return VaVeranstaltungen
     */
    public function setVeranstaltungName($veranstaltungName)
    {
        $this->veranstaltungName = $veranstaltungName;

        return $this;
    }

    /**
     * Get veranstaltungName
     *
     * @return string 
     */
    public function getVeranstaltungName()
    {
        return $this->veranstaltungName;
    }

    /**
     * Set veranstaltungBeschreibung
     *
     * @param string $veranstaltungBeschreibung
     * @return VaVeranstaltungen
     */
    public function setVeranstaltungBeschreibung($veranstaltungBeschreibung)
    {
        $this->veranstaltungBeschreibung = $veranstaltungBeschreibung;

        return $this;
    }

    /**
     * Get veranstaltungBeschreibung
     *
     * @return string 
     */
    public function getVeranstaltungBeschreibung()
    {
        return $this->veranstaltungBeschreibung;
    }

    /**
     * Set kontaktId
     *
     * @param integer $kontaktId
     * @return VaVeranstaltungen
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
     * Set kategorieId
     *
     * @param integer $kategorieId
     * @return VaVeranstaltungen
     */
    public function setKategorieId($kategorieId)
    {
        $this->kategorieId = $kategorieId;

        return $this;
    }

    /**
     * Get kategorieId
     *
     * @return integer 
     */
    public function getKategorieId()
    {
        return $this->kategorieId;
    }

    /**
     * Set veranstaltungPdfOrder
     *
     * @param integer $veranstaltungPdfOrder
     * @return VaVeranstaltungen
     */
    public function setVeranstaltungPdfOrder($veranstaltungPdfOrder)
    {
        $this->veranstaltungPdfOrder = $veranstaltungPdfOrder;

        return $this;
    }

    /**
     * Get veranstaltungPdfOrder
     *
     * @return integer 
     */
    public function getVeranstaltungPdfOrder()
    {
        return $this->veranstaltungPdfOrder;
    }

    /**
     * Set veranstaltungtIstpres
     *
     * @param integer $veranstaltungtIstpres
     * @return VaVeranstaltungen
     */
    public function setVeranstaltungtIstpres($veranstaltungtIstpres)
    {
        $this->veranstaltungtIstpres = $veranstaltungtIstpres;

        return $this;
    }

    /**
     * Get veranstaltungtIstpres
     *
     * @return integer 
     */
    public function getVeranstaltungtIstpres()
    {
        return $this->veranstaltungtIstpres;
    }

    /**
     * Set veranstaltungTipp
     *
     * @param string $veranstaltungTipp
     * @return VaVeranstaltungen
     */
    public function setVeranstaltungTipp($veranstaltungTipp)
    {
        $this->veranstaltungTipp = $veranstaltungTipp;

        return $this;
    }

    /**
     * Get veranstaltungTipp
     *
     * @return string 
     */
    public function getVeranstaltungTipp()
    {
        return $this->veranstaltungTipp;
    }

    /**
     * Set veranstaltungNeu
     *
     * @param string $veranstaltungNeu
     * @return VaVeranstaltungen
     */
    public function setVeranstaltungNeu($veranstaltungNeu)
    {
        $this->veranstaltungNeu = $veranstaltungNeu;

        return $this;
    }

    /**
     * Get veranstaltungNeu
     *
     * @return string 
     */
    public function getVeranstaltungNeu()
    {
        return $this->veranstaltungNeu;
    }

    /**
     * Get veranstaltungId
     *
     * @return integer 
     */
    public function getVeranstaltungId()
    {
        return $this->veranstaltungId;
    }
}
