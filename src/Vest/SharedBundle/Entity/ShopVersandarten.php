<?php

namespace Vest\SharedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopVersandarten
 */
class ShopVersandarten
{
    /**
     * @var integer
     */
    private $versandartId;

    /**
     * @var string
     */
    private $versandartName;


    /**
     * Get versandartId
     *
     * @return integer 
     */
    public function getVersandartId()
    {
        return $this->versandartId;
    }

    /**
     * Set versandartName
     *
     * @param string $versandartName
     * @return ShopVersandarten
     */
    public function setVersandartName($versandartName)
    {
        $this->versandartName = $versandartName;

        return $this;
    }

    /**
     * Get versandartName
     *
     * @return string 
     */
    public function getVersandartName()
    {
        return $this->versandartName;
    }
}
