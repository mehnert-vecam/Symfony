<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopVersandEinstellungen
 *
 * @ORM\Table(name="shop_versand_einstellungen", indexes={@ORM\Index(name="fk_shop_versand_einstellungen_shop_versandarten1", columns={"versand_id"})})
 * @ORM\Entity
 */
class ShopVersandEinstellungen
{
    /**
     * @var integer
     *
     * @ORM\Column(name="versand_id", type="integer", nullable=true)
     */
    private $versandId;

    /**
     * @var integer
     *
     * @ORM\Column(name="versand_einstellung_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $versandEinstellungId;



    /**
     * Set versandId
     *
     * @param integer $versandId
     * @return ShopVersandEinstellungen
     */
    public function setVersandId($versandId)
    {
        $this->versandId = $versandId;

        return $this;
    }

    /**
     * Get versandId
     *
     * @return integer 
     */
    public function getVersandId()
    {
        return $this->versandId;
    }

    /**
     * Get versandEinstellungId
     *
     * @return integer 
     */
    public function getVersandEinstellungId()
    {
        return $this->versandEinstellungId;
    }
}
