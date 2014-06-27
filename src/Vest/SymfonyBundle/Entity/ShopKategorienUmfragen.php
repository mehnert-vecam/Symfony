<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopKategorienUmfragen
 *
 * @ORM\Table(name="shop_kategorien_umfragen", indexes={@ORM\Index(name="fk_shop_kategorien_umfragen_shop_kategorien1", columns={"kategorie_id"})})
 * @ORM\Entity
 */
class ShopKategorienUmfragen
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
     * @ORM\Column(name="umfrage_id", type="integer", nullable=true)
     */
    private $umfrageId;

    /**
     * @var integer
     *
     * @ORM\Column(name="kategorie_umfrage_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $kategorieUmfrageId;



    /**
     * Set kategorieId
     *
     * @param integer $kategorieId
     * @return ShopKategorienUmfragen
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
     * Set umfrageId
     *
     * @param integer $umfrageId
     * @return ShopKategorienUmfragen
     */
    public function setUmfrageId($umfrageId)
    {
        $this->umfrageId = $umfrageId;

        return $this;
    }

    /**
     * Get umfrageId
     *
     * @return integer 
     */
    public function getUmfrageId()
    {
        return $this->umfrageId;
    }

    /**
     * Get kategorieUmfrageId
     *
     * @return integer 
     */
    public function getKategorieUmfrageId()
    {
        return $this->kategorieUmfrageId;
    }
}
