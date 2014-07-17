<?php

namespace Vest\ResponsaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SaleRabattwerte
 */
class SaleRabattwerte
{
    /**
     * @var integer
     */
    private $rabattoptionId;

    /**
     * @var string
     */
    private $rabattwerteObjekt;

    /**
     * @var string
     */
    private $rabattId;

    /**
     * @var integer
     */
    private $rabattwerteId;


    /**
     * Set rabattoptionId
     *
     * @param integer $rabattoptionId
     * @return SaleRabattwerte
     */
    public function setRabattoptionId($rabattoptionId)
    {
        $this->rabattoptionId = $rabattoptionId;

        return $this;
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

    /**
     * Set rabattwerteObjekt
     *
     * @param string $rabattwerteObjekt
     * @return SaleRabattwerte
     */
    public function setRabattwerteObjekt($rabattwerteObjekt)
    {
        $this->rabattwerteObjekt = $rabattwerteObjekt;

        return $this;
    }

    /**
     * Get rabattwerteObjekt
     *
     * @return string 
     */
    public function getRabattwerteObjekt()
    {
        return $this->rabattwerteObjekt;
    }

    /**
     * Set rabattId
     *
     * @param string $rabattId
     * @return SaleRabattwerte
     */
    public function setRabattId($rabattId)
    {
        $this->rabattId = $rabattId;

        return $this;
    }

    /**
     * Get rabattId
     *
     * @return string 
     */
    public function getRabattId()
    {
        return $this->rabattId;
    }

    /**
     * Get rabattwerteId
     *
     * @return integer 
     */
    public function getRabattwerteId()
    {
        return $this->rabattwerteId;
    }
}
