<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopKategorienZahlarten
 */
class ShopKategorienZahlarten
{
    /**
     * @var integer
     */
    private $kategorieId;

    /**
     * @var integer
     */
    private $zahlartId;

    /**
     * @var integer
     */
    private $kategorieZahlartId;


    /**
     * Set kategorieId
     *
     * @param integer $kategorieId
     * @return ShopKategorienZahlarten
     */
    public function setKategorieId($kategorieId)
    {
        $this->kategorieId = $kategorieId;

        return $this;
    }

    /**
     * Get kategorieId
     *
     * @return integer 
     */
    public function getKategorieId()
    {
        return $this->kategorieId;
    }

    /**
     * Set zahlartId
     *
     * @param integer $zahlartId
     * @return ShopKategorienZahlarten
     */
    public function setZahlartId($zahlartId)
    {
        $this->zahlartId = $zahlartId;

        return $this;
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

    /**
     * Get kategorieZahlartId
     *
     * @return integer 
     */
    public function getKategorieZahlartId()
    {
        return $this->kategorieZahlartId;
    }
}
