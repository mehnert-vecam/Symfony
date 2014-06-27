<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopTermineAttribute
 *
 * @ORM\Table(name="shop_termine_attribute", indexes={@ORM\Index(name="fk_shop_termine_attribute_shop_termine1", columns={"termin_id"}), @ORM\Index(name="fk_shop_termine_attribute_shop_attribute1", columns={"attribut_id"})})
 * @ORM\Entity
 */
class ShopTermineAttribute
{
    /**
     * @var integer
     *
     * @ORM\Column(name="termin_id", type="integer", nullable=true)
     */
    private $terminId;

    /**
     * @var integer
     *
     * @ORM\Column(name="attribut_id", type="integer", nullable=true)
     */
    private $attributId;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="text", nullable=true)
     */
    private $value;

    /**
     * @var integer
     *
     * @ORM\Column(name="termin_attribut", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $terminAttribut;



    /**
     * Set terminId
     *
     * @param integer $terminId
     * @return ShopTermineAttribute
     */
    public function setTerminId($terminId)
    {
        $this->terminId = $terminId;

        return $this;
    }

    /**
     * Get terminId
     *
     * @return integer 
     */
    public function getTerminId()
    {
        return $this->terminId;
    }

    /**
     * Set attributId
     *
     * @param integer $attributId
     * @return ShopTermineAttribute
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
     * Set value
     *
     * @param string $value
     * @return ShopTermineAttribute
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Get terminAttribut
     *
     * @return integer 
     */
    public function getTerminAttribut()
    {
        return $this->terminAttribut;
    }
}
