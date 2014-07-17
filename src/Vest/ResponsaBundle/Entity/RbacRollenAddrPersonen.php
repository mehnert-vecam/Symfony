<?php

namespace Vest\ResponsaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RbacRollenAddrPersonen
 */
class RbacRollenAddrPersonen
{
    /**
     * @var integer
     */
    private $rolleId;

    /**
     * @var integer
     */
    private $personId;

    /**
     * @var integer
     */
    private $rollePersonId;


    /**
     * Set rolleId
     *
     * @param integer $rolleId
     * @return RbacRollenAddrPersonen
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
     * Set personId
     *
     * @param integer $personId
     * @return RbacRollenAddrPersonen
     */
    public function setPersonId($personId)
    {
        $this->personId = $personId;

        return $this;
    }

    /**
     * Get personId
     *
     * @return integer 
     */
    public function getPersonId()
    {
        return $this->personId;
    }

    /**
     * Get rollePersonId
     *
     * @return integer 
     */
    public function getRollePersonId()
    {
        return $this->rollePersonId;
    }
}
