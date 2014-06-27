<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AddrKontakte
 *
 * @ORM\Table(name="addr_kontakte", indexes={@ORM\Index(name="record_status", columns={"record_status"})})
 * @ORM\Entity
 */
class AddrKontakte
{
    /**
     * @var string
     *
     * @ORM\Column(name="kontakt_kdnr", type="string", length=255, nullable=false)
     */
    private $kontaktKdnr;

    /**
     * @var string
     *
     * @ORM\Column(name="kontakt_typ", type="string", length=50, nullable=false)
     */
    private $kontaktTyp;

    /**
     * @var string
     *
     * @ORM\Column(name="kontakt_anrede", type="string", length=50, nullable=false)
     */
    private $kontaktAnrede;

    /**
     * @var string
     *
     * @ORM\Column(name="kontakt_name", type="string", length=100, nullable=false)
     */
    private $kontaktName;

    /**
     * @var string
     *
     * @ORM\Column(name="kontakt_name2", type="string", length=75, nullable=false)
     */
    private $kontaktName2;

    /**
     * @var string
     *
     * @ORM\Column(name="kontakt_name3", type="string", length=75, nullable=false)
     */
    private $kontaktName3;

    /**
     * @var string
     *
     * @ORM\Column(name="kontakt_kurzname", type="string", length=255, nullable=false)
     */
    private $kontaktKurzname;

    /**
     * @var string
     *
     * @ORM\Column(name="kontakt_strasse", type="string", length=255, nullable=false)
     */
    private $kontaktStrasse;

    /**
     * @var string
     *
     * @ORM\Column(name="kontakt_plz", type="string", length=10, nullable=false)
     */
    private $kontaktPlz;

    /**
     * @var string
     *
     * @ORM\Column(name="kontakt_ort", type="string", length=255, nullable=false)
     */
    private $kontaktOrt;

    /**
     * @var string
     *
     * @ORM\Column(name="kontakt_telefon", type="string", length=100, nullable=false)
     */
    private $kontaktTelefon;

    /**
     * @var string
     *
     * @ORM\Column(name="kontakt_telefax", type="string", length=100, nullable=false)
     */
    private $kontaktTelefax;

    /**
     * @var string
     *
     * @ORM\Column(name="kontakt_email", type="string", length=255, nullable=false)
     */
    private $kontaktEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="kontakt_url", type="string", length=255, nullable=false)
     */
    private $kontaktUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="kontakt_bemerkung", type="text", nullable=false)
     */
    private $kontaktBemerkung;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="kontakt_aktualisiert", type="datetime", nullable=false)
     */
    private $kontaktAktualisiert;

    /**
     * @var integer
     *
     * @ORM\Column(name="status_id", type="integer", nullable=false)
     */
    private $statusId;

    /**
     * @var integer
     *
     * @ORM\Column(name="parent_id", type="bigint", nullable=false)
     */
    private $parentId;

    /**
     * @var integer
     *
     * @ORM\Column(name="protection_level", type="integer", nullable=false)
     */
    private $protectionLevel;

    /**
     * @var boolean
     *
     * @ORM\Column(name="record_status", type="boolean", nullable=false)
     */
    private $recordStatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="kontakt_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
