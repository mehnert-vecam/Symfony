<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopKategorienVersandarten
 *
 * @ORM\Table(name="shop_kategorien_versandarten")
 * @ORM\Entity
 */
class ShopKategorienVersandarten
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
     * @ORM\Column(name="versandart_id", type="integer", nullable=true)
     */
    private $versandartId;

    /**
     * @var integer
     *
     * @ORM\Column(name="kategorie_versandart_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $kategorieVersandartId;



    /**
     * Set kategorieId
     *
     * @param integer $kategorieId
     * @return ShopKategorienVersandarten
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
     * Set versandartId
     *
     * @param integer $versandartId
     * @return ShopKategorienVersandarten
     */
    public function setVersandartId($versandartId)
    {
        $this->versandartId = $versandartId;

        return $this;
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

    /**
     * Get kategorieVersandartId
     *
     * @return integer 
     */
    public function getKategorieVersandartId()
    {
        return $this->kategorieVersandartId;
    }
}
