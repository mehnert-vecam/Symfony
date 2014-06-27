<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SaleRabattwerte
 *
 * @ORM\Table(name="sale_rabattwerte")
 * @ORM\Entity
 */
class SaleRabattwerte
{
    /**
     * @var integer
     *
     * @ORM\Column(name="rabattoption_id", type="integer", nullable=true)
     */
    private $rabattoptionId;

    /**
     * @var string
     *
     * @ORM\Column(name="rabattwerte_objekt", type="string", length=45, nullable=true)
     */
    private $rabattwerteObjekt;

    /**
     * @var string
     *
     * @ORM\Column(name="rabatt_id", type="string", length=45, nullable=true)
     */
    private $rabattId;

    /**
     * @var integer
     *
     * @ORM\Column(name="rabattwerte_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
