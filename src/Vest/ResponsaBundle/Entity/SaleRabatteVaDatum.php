<?php

namespace Vest\ResponsaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SaleRabatteVaDatum
 */
class SaleRabatteVaDatum
{
    /**
     * @var integer
     */
    private $rabattDatumId;

    /**
     * @var integer
     */
    private $rabatteId;

    /**
     * @var integer
     */
    private $datumId;


    /**
     * Get rabattDatumId
     *
     * @return integer 
     */
    public function getRabattDatumId()
    {
        return $this->rabattDatumId;
    }

    /**
     * Set rabatteId
     *
     * @param integer $rabatteId
     * @return SaleRabatteVaDatum
     */
    public function setRabatteId($rabatteId)
    {
        $this->rabatteId = $rabatteId;

        return $this;
    }

    /**
     * Get rabatteId
     *
     * @return integer 
     */
    public function getRabatteId()
    {
        return $this->rabatteId;
    }

    /**
     * Set datumId
     *
     * @param integer $datumId
     * @return SaleRabatteVaDatum
     */
    public function setDatumId($datumId)
    {
        $this->datumId = $datumId;

        return $this;
    }

    /**
     * Get datumId
     *
     * @return integer 
     */
    public function getDatumId()
    {
        return $this->datumId;
    }
}
