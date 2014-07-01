<?php

namespace Vest\ResponsaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopTermineAttribute
 */
class ShopTermineAttribute
{
    /**
     * @var integer
     */
    private $terminAttribut;

    /**
     * @var integer
     */
    private $terminId;

    /**
     * @var integer
     */
    private $attributId;

    /**
     * @var string
     */
    private $value;


    /**
     * Get terminAttribut
     *
     * @return integer 
     */
    public function getTerminAttribut()
    {
        return $this->terminAttribut;
    }

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
}
