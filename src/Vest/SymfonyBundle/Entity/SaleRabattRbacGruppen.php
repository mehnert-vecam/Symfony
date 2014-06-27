<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SaleRabattRbacGruppen
 *
 * @ORM\Table(name="sale_rabatt_rbac_gruppen")
 * @ORM\Entity
 */
class SaleRabattRbacGruppen
{
    /**
     * @var integer
     *
     * @ORM\Column(name="rabatt_id", type="integer", nullable=true)
     */
    private $rabattId;

    /**
     * @var integer
     *
     * @ORM\Column(name="gruppe_id", type="integer", nullable=true)
     */
    private $gruppeId;

    /**
     * @var integer
     *
     * @ORM\Column(name="rabatt_gruppe_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $rabattGruppeId;



    /**
     * Set rabattId
     *
     * @param integer $rabattId
     * @return SaleRabattRbacGruppen
     */
    public function setRabattId($rabattId)
    {
        $this->rabattId = $rabattId;

        return $this;
    }

    /**
     * Get rabattId
     *
     * @return integer 
     */
    public function getRabattId()
    {
        return $this->rabattId;
    }

    /**
     * Set gruppeId
     *
     * @param integer $gruppeId
     * @return SaleRabattRbacGruppen
     */
    public function setGruppeId($gruppeId)
    {
        $this->gruppeId = $gruppeId;

        return $this;
    }

    /**
     * Get gruppeId
     *
     * @return integer 
     */
    public function getGruppeId()
    {
        return $this->gruppeId;
    }

    /**
     * Get rabattGruppeId
     *
     * @return integer 
     */
    public function getRabattGruppeId()
    {
        return $this->rabattGruppeId;
    }
}
