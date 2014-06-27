<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SaleRabattoptionen
 *
 * @ORM\Table(name="sale_rabattoptionen")
 * @ORM\Entity
 */
class SaleRabattoptionen
{
    /**
     * @var string
     *
     * @ORM\Column(name="rabattoption_name", type="string", length=255, nullable=true)
     */
    private $rabattoptionName;

    /**
     * @var integer
     *
     * @ORM\Column(name="rabatttyp_id", type="integer", nullable=true)
     */
    private $rabatttypId;

    /**
     * @var integer
     *
     * @ORM\Column(name="rabattoption_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
