<?php

namespace Vest\SharedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopVersandEinstellungen
 */
class ShopVersandEinstellungen
{
    /**
     * @var integer
     */
    private $versandEinstellungId;

    /**
     * @var integer
     */
    private $versandId;


    /**
     * Get versandEinstellungId
     *
     * @return integer 
     */
    public function getVersandEinstellungId()
    {
        return $this->versandEinstellungId;
    }

    /**
     * Set versandId
     *
     * @param integer $versandId
     * @return ShopVersandEinstellungen
     */
    public function setVersandId($versandId)
    {
        $this->versandId = $versandId;

        return $this;
    }

    /**
     * Get versandId
     *
     * @return integer 
     */
    public function getVersandId()
    {
        return $this->versandId;
    }
}
