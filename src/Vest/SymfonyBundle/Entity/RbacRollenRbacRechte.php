<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RbacRollenRbacRechte
 *
 * @ORM\Table(name="rbac_rollen_rbac_rechte", uniqueConstraints={@ORM\UniqueConstraint(name="rollen_rechte_id", columns={"rollen_rechte_id"})})
 * @ORM\Entity
 */
class RbacRollenRbacRechte
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
     * @ORM\Column(name="recht_id", type="bigint", nullable=false)
     */
    private $rechtId;

    /**
     * @var integer
     *
     * @ORM\Column(name="rollen_rechte_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $rollenRechteId;



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

    /**
     * Get rollenRechteId
     *
     * @return integer 
     */
    public function getRollenRechteId()
    {
        return $this->rollenRechteId;
    }
}
