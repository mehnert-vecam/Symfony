<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SaleRabatteVaDatum
 *
 * @ORM\Table(name="sale_rabatte_va_datum")
 * @ORM\Entity
 */
class SaleRabatteVaDatum
{
    /**
     * @var integer
     *
     * @ORM\Column(name="rabatte_id", type="integer", nullable=true)
     */
    private $rabatteId;

    /**
     * @var integer
     *
     * @ORM\Column(name="datum_id", type="integer", nullable=true)
     */
    private $datumId;

    /**
     * @var integer
     *
     * @ORM\Column(name="rabatt_datum_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $rabattDatumId;



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

    /**
     * Get rabattDatumId
     *
     * @return integer 
     */
    public function getRabattDatumId()
    {
        return $this->rabattDatumId;
    }
}
