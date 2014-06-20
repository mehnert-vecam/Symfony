<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopAttribute
 */
class ShopAttribute
{
    /**
     * @var string
     */
    private $attributName;

    /**
     * @var string
     */
    private $attributDefault;

    /**
     * @var boolean
     */
    private $attributStatus;

    /**
     * @var integer
     */
    private $attributId;


    /**
     * Set attributName
     *
     * @param string $attributName
     * @return ShopAttribute
     */
    public function setAttributName($attributName)
    {
        $this->attributName = $attributName;

        return $this;
    }

    /**
     * Get attributName
     *
     * @return string 
     */
    public function getAttributName()
    {
        return $this->attributName;
    }

    /**
     * Set attributDefault
     *
     * @param string $attributDefault
     * @return ShopAttribute
     */
    public function setAttributDefault($attributDefault)
    {
        $this->attributDefault = $attributDefault;

        return $this;
    }

    /**
     * Get attributDefault
     *
     * @return string 
     */
    public function getAttributDefault()
    {
        return $this->attributDefault;
    }

    /**
     * Set attributStatus
     *
     * @param boolean $attributStatus
     * @return ShopAttribute
     */
    public function setAttributStatus($attributStatus)
    {
        $this->attributStatus = $attributStatus;

        return $this;
    }

    /**
     * Get attributStatus
     *
     * @return boolean 
     */
    public function getAttributStatus()
    {
        return $this->attributStatus;
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
