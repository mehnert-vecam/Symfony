<?php

namespace Vest\SharedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SaleRabatteVaKategorien
 */
class SaleRabatteVaKategorien
{
    /**
     * @var integer
     */
    private $rabattKategorie;

    /**
     * @var integer
     */
    private $rabatteId;

    /**
     * @var integer
     */
    private $kategorieId;


    /**
     * Get rabattKategorie
     *
     * @return integer 
     */
    public function getRabattKategorie()
    {
        return $this->rabattKategorie;
    }

    /**
     * Set rabatteId
     *
     * @param integer $rabatteId
     * @return SaleRabatteVaKategorien
     */
    public function setRabatteId($rabatteId)
    {
        $this->rabatteId = $rabatteId;

        return $this;
    }

    /**
     * Get rabatteId
     *
     * @return integer 
     */
    public function getRabatteId()
    {
        return $this->rabatteId;
    }

    /**
     * Set kategorieId
     *
     * @param integer $kategorieId
     * @return SaleRabatteVaKategorien
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
}
