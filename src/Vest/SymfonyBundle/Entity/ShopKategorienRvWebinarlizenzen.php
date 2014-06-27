<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopKategorienRvWebinarlizenzen
 *
 * @ORM\Table(name="shop_kategorien_rv_webinarlizenzen")
 * @ORM\Entity
 */
class ShopKategorienRvWebinarlizenzen
{
    /**
     * @var integer
     *
     * @ORM\Column(name="kategorie_id", type="integer", nullable=true)
     */
    private $kategorieId;

    /**
     * @var integer
     *
     * @ORM\Column(name="webinarlizenz_id", type="integer", nullable=true)
     */
    private $webinarlizenzId;

    /**
     * @var integer
     *
     * @ORM\Column(name="kategorie_webinarlizenz_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
