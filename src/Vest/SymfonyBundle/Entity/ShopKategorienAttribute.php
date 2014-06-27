<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopKategorienAttribute
 *
 * @ORM\Table(name="shop_kategorien_attribute")
 * @ORM\Entity
 */
class ShopKategorienAttribute
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
     * @ORM\Column(name="attribut_id", type="integer", nullable=true)
     */
    private $attributId;

    /**
     * @var integer
     *
     * @ORM\Column(name="kategorie_attribut_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $kategorieAttributId;



    /**
     * Set kategorieId
     *
     * @param integer $kategorieId
     * @return ShopKategorienAttribute
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
     * Set attributId
     *
     * @param integer $attributId
     * @return ShopKategorienAttribute
     */
    public function setAttributId($attributId)
    {
        $this->attributId = $attributId;

        return $this;
    }

    /**
     * Get attributId
     *
     * @return integer 
     */
    public function getAttributId()
    {
        return $this->attributId;
    }

    /**
     * Get kategorieAttributId
     *
     * @return integer 
     */
    public function getKategorieAttributId()
    {
        return $this->kategorieAttributId;
    }
}
