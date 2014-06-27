<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VaKategorieindividualisierungen
 *
 * @ORM\Table(name="va_kategorieindividualisierungen")
 * @ORM\Entity
 */
class VaKategorieindividualisierungen
{
    /**
     * @var integer
     *
     * @ORM\Column(name="kategorie_id", type="bigint", nullable=false)
     */
    private $kategorieId;

    /**
     * @var integer
     *
     * @ORM\Column(name="kontakt_id", type="bigint", nullable=false)
     */
    private $kontaktId;

    /**
     * @var string
     *
     * @ORM\Column(name="kategorieindividualisierung_name", type="string", length=255, nullable=false)
     */
    private $kategorieindividualisierungName;

    /**
     * @var string
     *
     * @ORM\Column(name="kategorieindividualisierung_anmeldebedingung", type="text", nullable=false)
     */
    private $kategorieindividualisierungAnmeldebedingung;

    /**
     * @var integer
     *
     * @ORM\Column(name="kategorieindividualisierung_split", type="integer", nullable=false)
     */
    private $kategorieindividualisierungSplit;

    /**
     * @var integer
     *
     * @ORM\Column(name="kategorieindividualisierung_prio", type="integer", nullable=false)
     */
    private $kategorieindividualisierungPrio;

    /**
     * @var integer
     *
     * @ORM\Column(name="kategorieindividualisierung_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $kategorieindividualisierungId;



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

    /**
     * Get kategorieindividualisierungId
     *
     * @return integer 
     */
    public function getKategorieindividualisierungId()
    {
        return $this->kategorieindividualisierungId;
    }
}
