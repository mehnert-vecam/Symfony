<?php

namespace Vest\ResponsaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopKategorienUmfragen
 */
class ShopKategorienUmfragen
{
    /**
     * @var integer
     */
    private $kategorieUmfrageId;

    /**
     * @var integer
     */
    private $kategorieId;

    /**
     * @var integer
     */
    private $umfrageId;


    /**
     * Get kategorieUmfrageId
     *
     * @return integer 
     */
    public function getKategorieUmfrageId()
    {
        return $this->kategorieUmfrageId;
    }

    /**
     * Set kategorieId
     *
     * @param integer $kategorieId
     * @return ShopKategorienUmfragen
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
     * Set umfrageId
     *
     * @param integer $umfrageId
     * @return ShopKategorienUmfragen
     */
    public function setUmfrageId($umfrageId)
    {
        $this->umfrageId = $umfrageId;

        return $this;
    }

    /**
     * Get umfrageId
     *
     * @return integer 
     */
    public function getUmfrageId()
    {
        return $this->umfrageId;
    }
}
