<?php

namespace Vest\ResponsaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SaleRabattRbacGruppen
 */
class SaleRabattRbacGruppen
{
    /**
     * @var integer
     */
    private $rabattGruppeId;

    /**
     * @var integer
     */
    private $rabattId;

    /**
     * @var integer
     */
    private $gruppeId;


    /**
     * Get rabattGruppeId
     *
     * @return integer 
     */
    public function getRabattGruppeId()
    {
        return $this->rabattGruppeId;
    }

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
}
