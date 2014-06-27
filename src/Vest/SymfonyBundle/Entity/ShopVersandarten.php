<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopVersandarten
 *
 * @ORM\Table(name="shop_versandarten")
 * @ORM\Entity
 */
class ShopVersandarten
{
    /**
     * @var string
     *
     * @ORM\Column(name="versandart_name", type="string", length=45, nullable=true)
     */
    private $versandartName;

    /**
     * @var integer
     *
     * @ORM\Column(name="versandart_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $versandartId;



    /**
     * Set versandartName
     *
     * @param string $versandartName
     * @return ShopVersandarten
     */
    public function setVersandartName($versandartName)
    {
        $this->versandartName = $versandartName;

        return $this;
    }

    /**
     * Get versandartName
     *
     * @return string 
     */
    public function getVersandartName()
    {
        return $this->versandartName;
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
}
