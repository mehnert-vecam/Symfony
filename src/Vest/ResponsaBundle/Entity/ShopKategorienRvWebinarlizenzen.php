<?php

namespace Vest\ResponsaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopKategorienRvWebinarlizenzen
 */
class ShopKategorienRvWebinarlizenzen
{
    /**
     * @var integer
     */
    private $kategorieId;

    /**
     * @var integer
     */
    private $webinarlizenzId;

    /**
     * @var integer
     */
    private $kategorieWebinarlizenzId;


    /**
     * Set kategorieId
     *
     * @param integer $kategorieId
     * @return ShopKategorienRvWebinarlizenzen
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
     * Set webinarlizenzId
     *
     * @param integer $webinarlizenzId
     * @return ShopKategorienRvWebinarlizenzen
     */
    public function setWebinarlizenzId($webinarlizenzId)
    {
        $this->webinarlizenzId = $webinarlizenzId;

        return $this;
    }

    /**
     * Get webinarlizenzId
     *
     * @return integer 
     */
    public function getWebinarlizenzId()
    {
        return $this->webinarlizenzId;
    }

    /**
     * Get kategorieWebinarlizenzId
     *
     * @return integer 
     */
    public function getKategorieWebinarlizenzId()
    {
        return $this->kategorieWebinarlizenzId;
    }
}
