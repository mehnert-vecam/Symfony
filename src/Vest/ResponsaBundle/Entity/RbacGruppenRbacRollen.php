<?php

namespace Vest\ResponsaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RbacGruppenRbacRollen
 */
class RbacGruppenRbacRollen
{
    /**
     * @var integer
     */
    private $gruppenRollenId;

    /**
     * @var integer
     */
    private $gruppeId;

    /**
     * @var integer
     */
    private $rolleId;


    /**
     * Get gruppenRollenId
     *
     * @return integer 
     */
    public function getGruppenRollenId()
    {
        return $this->gruppenRollenId;
    }

    /**
     * Set gruppeId
     *
     * @param integer $gruppeId
     * @return RbacGruppenRbacRollen
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
     * Set rolleId
     *
     * @param integer $rolleId
     * @return RbacGruppenRbacRollen
     */
    public function setRolleId($rolleId)
    {
        $this->rolleId = $rolleId;

        return $this;
    }

    /**
     * Get rolleId
     *
     * @return integer 
     */
    public function getRolleId()
    {
        return $this->rolleId;
    }
}
