<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopZahlarten
 *
 * @ORM\Table(name="shop_zahlarten")
 * @ORM\Entity
 */
class ShopZahlarten
{
    /**
     * @var string
     *
     * @ORM\Column(name="zahlart_name", type="string", length=45, nullable=true)
     */
    private $zahlartName;

    /**
     * @var integer
     *
     * @ORM\Column(name="zahlart_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $zahlartId;



    /**
     * Set zahlartName
     *
     * @param string $zahlartName
     * @return ShopZahlarten
     */
    public function setZahlartName($zahlartName)
    {
        $this->zahlartName = $zahlartName;

        return $this;
    }

    /**
     * Get zahlartName
     *
     * @return string 
     */
    public function getZahlartName()
    {
        return $this->zahlartName;
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
}
