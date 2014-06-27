<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SaleRabatttypen
 *
 * @ORM\Table(name="sale_rabatttypen")
 * @ORM\Entity
 */
class SaleRabatttypen
{
    /**
     * @var string
     *
     * @ORM\Column(name="rabatttyp_name", type="string", length=255, nullable=true)
     */
    private $rabatttypName;

    /**
     * @var integer
     *
     * @ORM\Column(name="rabatttyp_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $rabatttypId;



    /**
     * Set rabatttypName
     *
     * @param string $rabatttypName
     * @return SaleRabatttypen
     */
    public function setRabatttypName($rabatttypName)
    {
        $this->rabatttypName = $rabatttypName;

        return $this;
    }

    /**
     * Get rabatttypName
     *
     * @return string 
     */
    public function getRabatttypName()
    {
        return $this->rabatttypName;
    }

    /**
     * Get rabatttypId
     *
     * @return integer 
     */
    public function getRabatttypId()
    {
        return $this->rabatttypId;
    }
}
