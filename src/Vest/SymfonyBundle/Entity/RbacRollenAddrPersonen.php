<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RbacRollenAddrPersonen
 *
 * @ORM\Table(name="rbac_rollen_addr_personen")
 * @ORM\Entity
 */
class RbacRollenAddrPersonen
{
    /**
     * @var integer
     *
     * @ORM\Column(name="rolle_id", type="bigint", nullable=false)
     */
    private $rolleId;

    /**
     * @var integer
     *
     * @ORM\Column(name="person_id", type="bigint", nullable=false)
     */
    private $personId;

    /**
     * @var integer
     *
     * @ORM\Column(name="rolle_person_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
