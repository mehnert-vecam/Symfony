<?php

namespace Vest\SharedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopProdukteAttribute
 */
class ShopProdukteAttribute
{
    /**
     * @var integer
     */
    private $produktAttributId;

    /**
     * @var integer
     */
    private $productId;

    /**
     * @var integer
     */
    private $attributId;

    /**
     * @var string
     */
    private $attributValue;


    /**
     * Get produktAttributId
     *
     * @return integer 
     */
    public function getProduktAttributId()
    {
        return $this->produktAttributId;
    }

    /**
     * Set productId
     *
     * @param integer $productId
     * @return ShopProdukteAttribute
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Get productId
     *
     * @return integer 
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set attributId
     *
     * @param integer $attributId
     * @return ShopProdukteAttribute
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

    /**
     * Set attributValue
     *
     * @param string $attributValue
     * @return ShopProdukteAttribute
     */
    public function setAttributValue($attributValue)
    {
        $this->attributValue = $attributValue;

        return $this;
    }

    /**
     * Get attributValue
     *
     * @return string 
     */
    public function getAttributValue()
    {
        return $this->attributValue;
    }
}
