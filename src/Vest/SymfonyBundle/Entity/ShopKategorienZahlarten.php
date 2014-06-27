<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopKategorienZahlarten
 *
 * @ORM\Table(name="shop_kategorien_zahlarten", indexes={@ORM\Index(name="fk_shop_kategorie_zahlarten_shop_kategorien1", columns={"kategorie_id"}), @ORM\Index(name="fk_shop_kategorie_zahlarten_shop_zahlarten1", columns={"zahlart_id"})})
 * @ORM\Entity
 */
class ShopKategorienZahlarten
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
     * @ORM\Column(name="zahlart_id", type="integer", nullable=true)
     */
    private $zahlartId;

    /**
     * @var integer
     *
     * @ORM\Column(name="kategorie_zahlart_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
