<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SaleRabatteVaKategorien
 *
 * @ORM\Table(name="sale_rabatte_va_kategorien")
 * @ORM\Entity
 */
class SaleRabatteVaKategorien
{
    /**
     * @var integer
     *
     * @ORM\Column(name="rabatte_id", type="integer", nullable=true)
     */
    private $rabatteId;

    /**
     * @var integer
     *
     * @ORM\Column(name="kategorie_id", type="integer", nullable=true)
     */
    private $kategorieId;

    /**
     * @var integer
     *
     * @ORM\Column(name="rabatt_kategorie", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $rabattKategorie;



    /**
     * Set rabatteId
     *
     * @param integer $rabatteId
     * @return SaleRabatteVaKategorien
     */
    public function setRabatteId($rabatteId)
    {
        $this->rabatteId = $rabatteId;

        return $this;
    }

    /**
     * Get rabatteId
     *
     * @return integer 
     */
    public function getRabatteId()
    {
        return $this->rabatteId;
    }

    /**
     * Set kategorieId
     *
     * @param integer $kategorieId
     * @return SaleRabatteVaKategorien
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
     * Get rabattKategorie
     *
     * @return integer 
     */
    public function getRabattKategorie()
    {
        return $this->rabattKategorie;
    }
}
