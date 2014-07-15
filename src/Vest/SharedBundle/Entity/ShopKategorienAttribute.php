<?php

namespace Vest\SharedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopKategorienAttribute
 */
class ShopKategorienAttribute
{
    /**
     * @var integer
     */
    private $kategorieAttributId;

    /**
     * @var integer
     */
    private $kategorieId;

    /**
     * @var integer
     */
    private $attributId;


    /**
     * Get kategorieAttributId
     *
     * @return integer 
     */
    public function getKategorieAttributId()
    {
        return $this->kategorieAttributId;
    }

    /**
     * Set kategorieId
     *
     * @param integer $kategorieId
     * @return ShopKategorienAttribute
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
     * Set attributId
     *
     * @param integer $attributId
     * @return ShopKategorienAttribute
     */
    public function setAttributId($attributId)
    {
        $this->attributId = $attributId;

        return $this;
    }

    /**
     * Get attributId
     *
     * @return integer 
     */
    public function getAttributId()
    {
        return $this->attributId;
    }
}
