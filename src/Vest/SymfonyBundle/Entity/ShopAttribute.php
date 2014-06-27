<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopAttribute
 *
 * @ORM\Table(name="shop_attribute")
 * @ORM\Entity
 */
class ShopAttribute
{
    /**
     * @var string
     *
     * @ORM\Column(name="attribut_name", type="string", length=255, nullable=true)
     */
    private $attributName;

    /**
     * @var string
     *
     * @ORM\Column(name="attribut_default", type="string", length=45, nullable=true)
     */
    private $attributDefault;

    /**
     * @var boolean
     *
     * @ORM\Column(name="attribut_status", type="boolean", nullable=true)
     */
    private $attributStatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="attribut_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
