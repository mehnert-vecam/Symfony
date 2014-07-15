<?php

namespace Vest\SharedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VaKategorieindividualisierungen
 */
class VaKategorieindividualisierungen
{
    /**
     * @var integer
     */
    private $kategorieindividualisierungId;

    /**
     * @var integer
     */
    private $kategorieId;

    /**
     * @var integer
     */
    private $kontaktId;

    /**
     * @var string
     */
    private $kategorieindividualisierungName;

    /**
     * @var string
     */
    private $kategorieindividualisierungAnmeldebedingung;

    /**
     * @var integer
     */
    private $kategorieindividualisierungSplit;

    /**
     * @var integer
     */
    private $kategorieindividualisierungPrio;


    /**
     * Get kategorieindividualisierungId
     *
     * @return integer 
     */
    public function getKategorieindividualisierungId()
    {
        return $this->kategorieindividualisierungId;
    }

    /**
     * Set kategorieId
     *
     * @param integer $kategorieId
     * @return VaKategorieindividualisierungen
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
     * Set kontaktId
     *
     * @param integer $kontaktId
     * @return VaKategorieindividualisierungen
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
     * Set kategorieindividualisierungName
     *
     * @param string $kategorieindividualisierungName
     * @return VaKategorieindividualisierungen
     */
    public function setKategorieindividualisierungName($kategorieindividualisierungName)
    {
        $this->kategorieindividualisierungName = $kategorieindividualisierungName;

        return $this;
    }

    /**
     * Get kategorieindividualisierungName
     *
     * @return string 
     */
    public function getKategorieindividualisierungName()
    {
        return $this->kategorieindividualisierungName;
    }

    /**
     * Set kategorieindividualisierungAnmeldebedingung
     *
     * @param string $kategorieindividualisierungAnmeldebedingung
     * @return VaKategorieindividualisierungen
     */
    public function setKategorieindividualisierungAnmeldebedingung($kategorieindividualisierungAnmeldebedingung)
    {
        $this->kategorieindividualisierungAnmeldebedingung = $kategorieindividualisierungAnmeldebedingung;

        return $this;
    }

    /**
     * Get kategorieindividualisierungAnmeldebedingung
     *
     * @return string 
     */
    public function getKategorieindividualisierungAnmeldebedingung()
    {
        return $this->kategorieindividualisierungAnmeldebedingung;
    }

    /**
     * Set kategorieindividualisierungSplit
     *
     * @param integer $kategorieindividualisierungSplit
     * @return VaKategorieindividualisierungen
     */
    public function setKategorieindividualisierungSplit($kategorieindividualisierungSplit)
    {
        $this->kategorieindividualisierungSplit = $kategorieindividualisierungSplit;

        return $this;
    }

    /**
     * Get kategorieindividualisierungSplit
     *
     * @return integer 
     */
    public function getKategorieindividualisierungSplit()
    {
        return $this->kategorieindividualisierungSplit;
    }

    /**
     * Set kategorieindividualisierungPrio
     *
     * @param integer $kategorieindividualisierungPrio
     * @return VaKategorieindividualisierungen
     */
    public function setKategorieindividualisierungPrio($kategorieindividualisierungPrio)
    {
        $this->kategorieindividualisierungPrio = $kategorieindividualisierungPrio;

        return $this;
    }

    /**
     * Get kategorieindividualisierungPrio
     *
     * @return integer 
     */
    public function getKategorieindividualisierungPrio()
    {
        return $this->kategorieindividualisierungPrio;
    }
}
