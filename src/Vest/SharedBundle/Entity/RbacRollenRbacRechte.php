<?php

namespace Vest\SharedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RbacRollenRbacRechte
 */
class RbacRollenRbacRechte
{
    /**
     * @var integer
     */
    private $rollenRechteId;

    /**
     * @var integer
     */
    private $rolleId;

    /**
     * @var integer
     */
    private $rechtId;


    /**
     * Get rollenRechteId
     *
     * @return integer 
     */
    public function getRollenRechteId()
    {
        return $this->rollenRechteId;
    }

    /**
     * Set rolleId
     *
     * @param integer $rolleId
     * @return RbacRollenRbacRechte
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

    /**
     * Set rechtId
     *
     * @param integer $rechtId
     * @return RbacRollenRbacRechte
     */
    public function setRechtId($rechtId)
    {
        $this->rechtId = $rechtId;

        return $this;
    }

    /**
     * Get rechtId
     *
     * @return integer 
     */
    public function getRechtId()
    {
        return $this->rechtId;
    }
}
