<?php

namespace Vest\ResponsaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AddrKontakte
 */
class AddrKontakte
{
    /**
     * @var string
     */
    private $kontaktKdnr;

    /**
     * @var string
     */
    private $kontaktTyp;

    /**
     * @var string
     */
    private $kontaktAnrede;

    /**
     * @var string
     */
    private $kontaktName;

    /**
     * @var string
     */
    private $kontaktName2;

    /**
     * @var string
     */
    private $kontaktName3;

    /**
     * @var string
     */
    private $kontaktKurzname;

    /**
     * @var string
     */
    private $kontaktStrasse;

    /**
     * @var string
     */
    private $kontaktPlz;

    /**
     * @var string
     */
    private $kontaktOrt;

    /**
     * @var string
     */
    private $kontaktTelefon;

    /**
     * @var string
     */
    private $kontaktTelefax;

    /**
     * @var string
     */
    private $kontaktEmail;

    /**
     * @var string
     */
    private $kontaktUrl;

    /**
     * @var string
     */
    private $kontaktBemerkung;

    /**
     * @var \DateTime
     */
    private $kontaktAktualisiert;

    /**
     * @var integer
     */
    private $statusId;

    /**
     * @var integer
     */
    private $parentId;

    /**
     * @var integer
     */
    private $protectionLevel;

    /**
     * @var boolean
     */
    private $recordStatus;

    /**
     * @var integer
     */
    private $kontaktId;


    /**
     * Set kontaktKdnr
     *
     * @param string $kontaktKdnr
     * @return AddrKontakte
     */
    public function setKontaktKdnr($kontaktKdnr)
    {
        $this->kontaktKdnr = $kontaktKdnr;

        return $this;
    }

    /**
     * Get kontaktKdnr
     *
     * @return string 
     */
    public function getKontaktKdnr()
    {
        return $this->kontaktKdnr;
    }

    /**
     * Set kontaktTyp
     *
     * @param string $kontaktTyp
     * @return AddrKontakte
     */
    public function setKontaktTyp($kontaktTyp)
    {
        $this->kontaktTyp = $kontaktTyp;

        return $this;
    }

    /**
     * Get kontaktTyp
     *
     * @return string 
     */
    public function getKontaktTyp()
    {
        return $this->kontaktTyp;
    }

    /**
     * Set kontaktAnrede
     *
     * @param string $kontaktAnrede
     * @return AddrKontakte
     */
    public function setKontaktAnrede($kontaktAnrede)
    {
        $this->kontaktAnrede = $kontaktAnrede;

        return $this;
    }

    /**
     * Get kontaktAnrede
     *
     * @return string 
     */
    public function getKontaktAnrede()
    {
        return $this->kontaktAnrede;
    }

    /**
     * Set kontaktName
     *
     * @param string $kontaktName
     * @return AddrKontakte
     */
    public function setKontaktName($kontaktName)
    {
        $this->kontaktName = $kontaktName;

        return $this;
    }

    /**
     * Get kontaktName
     *
     * @return string 
     */
    public function getKontaktName()
    {
        return $this->kontaktName;
    }

    /**
     * Set kontaktName2
     *
     * @param string $kontaktName2
     * @return AddrKontakte
     */
    public function setKontaktName2($kontaktName2)
    {
        $this->kontaktName2 = $kontaktName2;

        return $this;
    }

    /**
     * Get kontaktName2
     *
     * @return string 
     */
    public function getKontaktName2()
    {
        return $this->kontaktName2;
    }

    /**
     * Set kontaktName3
     *
     * @param string $kontaktName3
     * @return AddrKontakte
     */
    public function setKontaktName3($kontaktName3)
    {
        $this->kontaktName3 = $kontaktName3;

        return $this;
    }

    /**
     * Get kontaktName3
     *
     * @return string 
     */
    public function getKontaktName3()
    {
        return $this->kontaktName3;
    }

    /**
     * Set kontaktKurzname
     *
     * @param string $kontaktKurzname
     * @return AddrKontakte
     */
    public function setKontaktKurzname($kontaktKurzname)
    {
        $this->kontaktKurzname = $kontaktKurzname;

        return $this;
    }

    /**
     * Get kontaktKurzname
     *
     * @return string 
     */
    public function getKontaktKurzname()
    {
        return $this->kontaktKurzname;
    }

    /**
     * Set kontaktStrasse
     *
     * @param string $kontaktStrasse
     * @return AddrKontakte
     */
    public function setKontaktStrasse($kontaktStrasse)
    {
        $this->kontaktStrasse = $kontaktStrasse;

        return $this;
    }

    /**
     * Get kontaktStrasse
     *
     * @return string 
     */
    public function getKontaktStrasse()
    {
        return $this->kontaktStrasse;
    }

    /**
     * Set kontaktPlz
     *
     * @param string $kontaktPlz
     * @return AddrKontakte
     */
    public function setKontaktPlz($kontaktPlz)
    {
        $this->kontaktPlz = $kontaktPlz;

        return $this;
    }

    /**
     * Get kontaktPlz
     *
     * @return string 
     */
    public function getKontaktPlz()
    {
        return $this->kontaktPlz;
    }

    /**
     * Set kontaktOrt
     *
     * @param string $kontaktOrt
     * @return AddrKontakte
     */
    public function setKontaktOrt($kontaktOrt)
    {
        $this->kontaktOrt = $kontaktOrt;

        return $this;
    }

    /**
     * Get kontaktOrt
     *
     * @return string 
     */
    public function getKontaktOrt()
    {
        return $this->kontaktOrt;
    }

    /**
     * Set kontaktTelefon
     *
     * @param string $kontaktTelefon
     * @return AddrKontakte
     */
    public function setKontaktTelefon($kontaktTelefon)
    {
        $this->kontaktTelefon = $kontaktTelefon;

        return $this;
    }

    /**
     * Get kontaktTelefon
     *
     * @return string 
     */
    public function getKontaktTelefon()
    {
        return $this->kontaktTelefon;
    }

    /**
     * Set kontaktTelefax
     *
     * @param string $kontaktTelefax
     * @return AddrKontakte
     */
    public function setKontaktTelefax($kontaktTelefax)
    {
        $this->kontaktTelefax = $kontaktTelefax;

        return $this;
    }

    /**
     * Get kontaktTelefax
     *
     * @return string 
     */
    public function getKontaktTelefax()
    {
        return $this->kontaktTelefax;
    }

    /**
     * Set kontaktEmail
     *
     * @param string $kontaktEmail
     * @return AddrKontakte
     */
    public function setKontaktEmail($kontaktEmail)
    {
        $this->kontaktEmail = $kontaktEmail;

        return $this;
    }

    /**
     * Get kontaktEmail
     *
     * @return string 
     */
    public function getKontaktEmail()
    {
        return $this->kontaktEmail;
    }

    /**
     * Set kontaktUrl
     *
     * @param string $kontaktUrl
     * @return AddrKontakte
     */
    public function setKontaktUrl($kontaktUrl)
    {
        $this->kontaktUrl = $kontaktUrl;

        return $this;
    }

    /**
     * Get kontaktUrl
     *
     * @return string 
     */
    public function getKontaktUrl()
    {
        return $this->kontaktUrl;
    }

    /**
     * Set kontaktBemerkung
     *
     * @param string $kontaktBemerkung
     * @return AddrKontakte
     */
    public function setKontaktBemerkung($kontaktBemerkung)
    {
        $this->kontaktBemerkung = $kontaktBemerkung;

        return $this;
    }

    /**
     * Get kontaktBemerkung
     *
     * @return string 
     */
    public function getKontaktBemerkung()
    {
        return $this->kontaktBemerkung;
    }

    /**
     * Set kontaktAktualisiert
     *
     * @param \DateTime $kontaktAktualisiert
     * @return AddrKontakte
     */
    public function setKontaktAktualisiert($kontaktAktualisiert)
    {
        $this->kontaktAktualisiert = $kontaktAktualisiert;

        return $this;
    }

    /**
     * Get kontaktAktualisiert
     *
     * @return \DateTime 
     */
    public function getKontaktAktualisiert()
    {
        return $this->kontaktAktualisiert;
    }

    /**
     * Set statusId
     *
     * @param integer $statusId
     * @return AddrKontakte
     */
    public function setStatusId($statusId)
    {
        $this->statusId = $statusId;

        return $this;
    }

    /**
     * Get statusId
     *
     * @return integer 
     */
    public function getStatusId()
    {
        return $this->statusId;
    }

    /**
     * Set parentId
     *
     * @param integer $parentId
     * @return AddrKontakte
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;

        return $this;
    }

    /**
     * Get parentId
     *
     * @return integer 
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Set protectionLevel
     *
     * @param integer $protectionLevel
     * @return AddrKontakte
     */
    public function setProtectionLevel($protectionLevel)
    {
        $this->protectionLevel = $protectionLevel;

        return $this;
    }

    /**
     * Get protectionLevel
     *
     * @return integer 
     */
    public function getProtectionLevel()
    {
        return $this->protectionLevel;
    }

    /**
     * Set recordStatus
     *
     * @param boolean $recordStatus
     * @return AddrKontakte
     */
    public function setRecordStatus($recordStatus)
    {
        $this->recordStatus = $recordStatus;

        return $this;
    }

    /**
     * Get recordStatus
     *
     * @return boolean 
     */
    public function getRecordStatus()
    {
        return $this->recordStatus;
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
}
