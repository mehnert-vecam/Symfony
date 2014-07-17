<?php

namespace Vest\ResponsaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VaVeranstaltungen
 */
class VaVeranstaltungen
{
    /**
     * @var string
     */
    private $veranstaltungTag;

    /**
     * @var string
     */
    private $veranstaltungName;

    /**
     * @var string
     */
    private $veranstaltungBeschreibung;

    /**
     * @var integer
     */
    private $kontaktId;

    /**
     * @var integer
     */
    private $kategorieId;

    /**
     * @var integer
     */
    private $veranstaltungPdfOrder;

    /**
     * @var integer
     */
    private $veranstaltungtIstpres;

    /**
     * @var string
     */
    private $veranstaltungTipp;

    /**
     * @var string
     */
    private $veranstaltungNeu;

    /**
     * @var integer
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
