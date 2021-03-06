<?php

namespace Vest\SharedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SaleRabattoptionen
 */
class SaleRabattoptionen
{
    /**
     * @var integer
     */
    private $rabattoptionId;

    /**
     * @var string
     */
    private $rabattoptionName;

    /**
     * @var integer
     */
    private $rabatttypId;


    /**
     * Get rabattoptionId
     *
     * @return integer 
     */
    public function getRabattoptionId()
    {
        return $this->rabattoptionId;
    }

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
}
