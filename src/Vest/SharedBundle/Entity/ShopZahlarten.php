<?php

namespace Vest\SharedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopZahlarten
 */
class ShopZahlarten
{
    /**
     * @var integer
     */
    private $zahlartId;

    /**
     * @var string
     */
    private $zahlartName;


    /**
     * Get zahlartId
     *
     * @return integer 
     */
    public function getZahlartId()
    {
        return $this->zahlartId;
    }

    /**
     * Set zahlartName
     *
     * @param string $zahlartName
     * @return ShopZahlarten
     */
    public function setZahlartName($zahlartName)
    {
        $this->zahlartName = $zahlartName;

        return $this;
    }

    /**
     * Get zahlartName
     *
     * @return string 
     */
    public function getZahlartName()
    {
        return $this->zahlartName;
    }
}
