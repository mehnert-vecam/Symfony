<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopZahlarten
 */
class ShopZahlarten
{
    /**
     * @var string
     */
    private $zahlartName;

    /**
     * @var integer
     */
    private $zahlartId;


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

    /**
     * Get zahlartId
     *
     * @return integer 
     */
    public function getZahlartId()
    {
        return $this->zahlartId;
    }
}
