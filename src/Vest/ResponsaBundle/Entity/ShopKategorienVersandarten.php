<?php

namespace Vest\ResponsaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopKategorienVersandarten
 */
class ShopKategorienVersandarten
{
    /**
     * @var integer
     */
    private $kategorieId;

    /**
     * @var integer
     */
    private $versandartId;

    /**
     * @var integer
     */
    private $kategorieVersandartId;


    /**
     * Set kategorieId
     *
     * @param integer $kategorieId
     * @return ShopKategorienVersandarten
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
     * Set versandartId
     *
     * @param integer $versandartId
     * @return ShopKategorienVersandarten
     */
    public function setVersandartId($versandartId)
    {
        $this->versandartId = $versandartId;

        return $this;
    }

    /**
     * Get versandartId
     *
     * @return integer 
     */
    public function getVersandartId()
    {
        return $this->versandartId;
    }

    /**
     * Get kategorieVersandartId
     *
     * @return integer 
     */
    public function getKategorieVersandartId()
    {
        return $this->kategorieVersandartId;
    }
}
