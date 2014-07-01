<?php

namespace Vest\ResponsaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SaleRabatttypen
 */
class SaleRabatttypen
{
    /**
     * @var integer
     */
    private $rabatttypId;

    /**
     * @var string
     */
    private $rabatttypName;


    /**
     * Get rabatttypId
     *
     * @return integer 
     */
    public function getRabatttypId()
    {
        return $this->rabatttypId;
    }

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
}
