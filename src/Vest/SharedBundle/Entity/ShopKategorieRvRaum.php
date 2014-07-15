<?php

namespace Vest\SharedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopKategorieRvRaum
 */
class ShopKategorieRvRaum
{
    /**
     * @var integer
     */
    private $kategorieRaumId;

    /**
     * @var integer
     */
    private $raumId;

    /**
     * @var integer
     */
    private $kategorieId;


    /**
     * Get kategorieRaumId
     *
     * @return integer 
     */
    public function getKategorieRaumId()
    {
        return $this->kategorieRaumId;
    }

    /**
     * Set raumId
     *
     * @param integer $raumId
     * @return ShopKategorieRvRaum
     */
    public function setRaumId($raumId)
    {
        $this->raumId = $raumId;

        return $this;
    }

    /**
     * Get raumId
     *
     * @return integer 
     */
    public function getRaumId()
    {
        return $this->raumId;
    }

    /**
     * Set kategorieId
     *
     * @param integer $kategorieId
     * @return ShopKategorieRvRaum
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
