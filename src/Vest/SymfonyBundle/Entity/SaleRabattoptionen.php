<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SaleRabattoptionen
 */
class SaleRabattoptionen
{
    /**
     * @var string
     */
    private $rabattoptionName;

    /**
     * @var integer
     */
    private $rabatttypId;

    /**
     * @var integer
     */
    private $rabattoptionId;


    /**
     * Set rabattoptionName
     *
     * @param string $rabattoptionName
     * @return SaleRabattoptionen
     */
    public function setRabattoptionName($rabattoptionName)
    {
        $this->rabattoptionName = $rabattoptionName;

        return $this;
    }

    /**
     * Get rabattoptionName
     *
     * @return string 
     */
    public function getRabattoptionName()
    {
        return $this->rabattoptionName;
    }

    /**
     * Set rabatttypId
     *
     * @param integer $rabatttypId
     * @return SaleRabattoptionen
     */
    public function setRabatttypId($rabatttypId)
    {
        $this->rabatttypId = $rabatttypId;

        return $this;
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

    /**
     * Get rabattoptionId
     *
     * @return integer 
     */
    public function getRabattoptionId()
    {
        return $this->rabattoptionId;
    }
}
