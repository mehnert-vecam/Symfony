<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopKategorien
 *
 * @ORM\Table(name="shop_kategorien")
 * @ORM\Entity
 */
class ShopKategorien
{
    /**
     * @var string
     *
     * @ORM\Column(name="kategorie_name", type="string", length=255, nullable=true)
     */
    private $kategorieName;

    /**
     * @var boolean
     *
     * @ORM\Column(name="kategorie_status", type="boolean", nullable=true)
     */
    private $kategorieStatus;

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
     * @return ShopKategorien
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
     * Set kategorieStatus
     *
     * @param boolean $kategorieStatus
     * @return ShopKategorien
     */
    public function setKategorieStatus($kategorieStatus)
    {
        $this->kategorieStatus = $kategorieStatus;

        return $this;
    }

    /**
     * Get kategorieStatus
     *
     * @return boolean 
     */
    public function getKategorieStatus()
    {
        return $this->kategorieStatus;
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
