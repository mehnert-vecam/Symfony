<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopKategorien
 */
class ShopKategorien
{
    /**
     * @var string
     */
    private $kategorieName;

    /**
     * @var boolean
     */
    private $kategorieStatus;

    /**
     * @var integer
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
