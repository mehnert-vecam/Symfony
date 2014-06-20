<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VaKategorien
 */
class VaKategorien
{
    /**
     * @var string
     */
    private $kategorieName;

    /**
     * @var string
     */
    private $kategorieAnmeldebedingung;

    /**
     * @var integer
     */
    private $kontaktId;

    /**
     * @var integer
     */
    private $kategorieReq;

    /**
     * @var integer
     */
    private $kategorieSplit;

    /**
     * @var integer
     */
    private $kategoriePrio;

    /**
     * @var integer
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
