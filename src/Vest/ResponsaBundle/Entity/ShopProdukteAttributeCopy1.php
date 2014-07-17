<?php

namespace Vest\ResponsaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopProdukteAttributeCopy1
 */
class ShopProdukteAttributeCopy1
{
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
     * @var integer
     */
    private $produktAttributId;


    /**
     * Set productId
     *
     * @param integer $productId
     * @return ShopProdukteAttributeCopy1
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
     * @return ShopProdukteAttributeCopy1
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
     * @return ShopProdukteAttributeCopy1
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

    /**
     * Get produktAttributId
     *
     * @return integer 
     */
    public function getProduktAttributId()
    {
        return $this->produktAttributId;
    }
}
