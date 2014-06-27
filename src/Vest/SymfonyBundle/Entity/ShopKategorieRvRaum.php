<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopKategorieRvRaum
 *
 * @ORM\Table(name="shop_kategorie_rv_raum")
 * @ORM\Entity
 */
class ShopKategorieRvRaum
{
    /**
     * @var integer
     *
     * @ORM\Column(name="raum_id", type="integer", nullable=true)
     */
    private $raumId;

    /**
     * @var integer
     *
     * @ORM\Column(name="kategorie_id", type="integer", nullable=true)
     */
    private $kategorieId;

    /**
     * @var integer
     *
     * @ORM\Column(name="kategorie_raum_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $kategorieRaumId;



    /**
     * Set raumId
     *
     * @param integer $raumId
     * @return ShopKategorieRvRaum
     */
    public function setRaumId($raumId)
    {
        $this->raumId = $raumId;

        return $this;
    }

    /**
     * Get raumId
     *
     * @return integer 
     */
    public function getRaumId()
    {
        return $this->raumId;
    }

    /**
     * Set kategorieId
     *
     * @param integer $kategorieId
     * @return ShopKategorieRvRaum
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
     * Get kategorieRaumId
     *
     * @return integer 
     */
    public function getKategorieRaumId()
    {
        return $this->kategorieRaumId;
    }
}
