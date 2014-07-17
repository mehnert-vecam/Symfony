<?php

namespace Vest\ResponsaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SaleRabatttypen
 */
class SaleRabatttypen
{
    /**
     * @var string
     */
    private $rabatttypName;

    /**
     * @var integer
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
