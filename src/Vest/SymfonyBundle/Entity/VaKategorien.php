<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VaKategorien
 *
 * @ORM\Table(name="va_kategorien")
 * @ORM\Entity
 */
class VaKategorien
{
    /**
     * @var string
     *
     * @ORM\Column(name="kategorie_name", type="string", length=255, nullable=false)
     */
    private $kategorieName;

    /**
     * @var string
     *
     * @ORM\Column(name="kategorie_anmeldebedingung", type="text", nullable=false)
     */
    private $kategorieAnmeldebedingung;

    /**
     * @var integer
     *
     * @ORM\Column(name="kontakt_id", type="bigint", nullable=false)
     */
    private $kontaktId;

    /**
     * @var integer
     *
     * @ORM\Column(name="kategorie_req", type="integer", nullable=false)
     */
    private $kategorieReq;

    /**
     * @var integer
     *
     * @ORM\Column(name="kategorie_split", type="integer", nullable=false)
     */
    private $kategorieSplit;

    /**
     * @var integer
     *
     * @ORM\Column(name="kategorie_prio", type="integer", nullable=false)
     */
    private $kategoriePrio;

    /**
     * @var integer
     *
     * @ORM\Column(name="kategorie_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $kategorieId;



    /**
     * Set kategorieName
     *
     * @param string $kategorieName
     * @return VaKategorien
     */
    public function setKategorieName($kategorieName)
    {
        $this->kategorieName = $kategorieName;

        return $this;
    }

    /**
     * Get kategorieName
     *
     * @return string 
     */
    public function getKategorieName()
    {
        return $this->kategorieName;
    }

    /**
     * Set kategorieAnmeldebedingung
     *
     * @param string $kategorieAnmeldebedingung
     * @return VaKategorien
     */
    public function setKategorieAnmeldebedingung($kategorieAnmeldebedingung)
    {
        $this->kategorieAnmeldebedingung = $kategorieAnmeldebedingung;

        return $this;
    }

    /**
     * Get kategorieAnmeldebedingung
     *
     * @return string 
     */
    public function getKategorieAnmeldebedingung()
    {
        return $this->kategorieAnmeldebedingung;
    }

    /**
     * Set kontaktId
     *
     * @param integer $kontaktId
     * @return VaKategorien
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
     * Set kategorieReq
     *
     * @param integer $kategorieReq
     * @return VaKategorien
     */
    public function setKategorieReq($kategorieReq)
    {
        $this->kategorieReq = $kategorieReq;

        return $this;
    }

    /**
     * Get kategorieReq
     *
     * @return integer 
     */
    public function getKategorieReq()
    {
        return $this->kategorieReq;
    }

    /**
     * Set kategorieSplit
     *
     * @param integer $kategorieSplit
     * @return VaKategorien
     */
    public function setKategorieSplit($kategorieSplit)
    {
        $this->kategorieSplit = $kategorieSplit;

        return $this;
    }

    /**
     * Get kategorieSplit
     *
     * @return integer 
     */
    public function getKategorieSplit()
    {
        return $this->kategorieSplit;
    }

    /**
     * Set kategoriePrio
     *
     * @param integer $kategoriePrio
     * @return VaKategorien
     */
    public function setKategoriePrio($kategoriePrio)
    {
        $this->kategoriePrio = $kategoriePrio;

        return $this;
    }

    /**
     * Get kategoriePrio
     *
     * @return integer 
     */
    public function getKategoriePrio()
    {
        return $this->kategoriePrio;
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
}
