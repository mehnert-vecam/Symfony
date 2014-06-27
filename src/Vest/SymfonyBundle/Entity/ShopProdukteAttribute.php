<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopProdukteAttribute
 *
 * @ORM\Table(name="shop_produkte_attribute")
 * @ORM\Entity
 */
class ShopProdukteAttribute
{
    /**
     * @var integer
     *
     * @ORM\Column(name="product_id", type="integer", nullable=true)
     */
    private $productId;

    /**
     * @var integer
     *
     * @ORM\Column(name="attribut_id", type="integer", nullable=true)
     */
    private $attributId;

    /**
     * @var string
     *
     * @ORM\Column(name="attribut_value", type="text", nullable=true)
     */
    private $attributValue;

    /**
     * @var integer
     *
     * @ORM\Column(name="produkt_attribut_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $produktAttributId;



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
