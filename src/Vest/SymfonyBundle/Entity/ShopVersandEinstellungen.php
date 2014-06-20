<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopVersandEinstellungen
 */
class ShopVersandEinstellungen
{
    /**
     * @var integer
     */
    private $versandId;

    /**
     * @var integer
     */
    private $versandEinstellungId;


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

    /**
     * Get versandEinstellungId
     *
     * @return integer 
     */
    public function getVersandEinstellungId()
    {
        return $this->versandEinstellungId;
    }
}
