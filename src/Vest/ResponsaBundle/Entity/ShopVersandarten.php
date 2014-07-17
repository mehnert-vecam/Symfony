<?php

namespace Vest\ResponsaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopVersandarten
 */
class ShopVersandarten
{
    /**
     * @var string
     */
    private $versandartName;

    /**
     * @var integer
     */
    private $versandartId;


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

    /**
     * Get versandartId
     *
     * @return integer 
     */
    public function getVersandartId()
    {
        return $this->versandartId;
    }
}
