<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RbacGruppenRbacRollen
 *
 * @ORM\Table(name="rbac_gruppen_rbac_rollen", indexes={@ORM\Index(name="gruppenid", columns={"gruppe_id"})})
 * @ORM\Entity
 */
class RbacGruppenRbacRollen
{
    /**
     * @var integer
     *
     * @ORM\Column(name="gruppe_id", type="bigint", nullable=false)
     */
    private $gruppeId;

    /**
     * @var integer
     *
     * @ORM\Column(name="rolle_id", type="bigint", nullable=false)
     */
    private $rolleId;

    /**
     * @var integer
     *
     * @ORM\Column(name="gruppen_rollen_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $gruppenRollenId;



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

    /**
     * Get gruppenRollenId
     *
     * @return integer 
     */
    public function getGruppenRollenId()
    {
        return $this->gruppenRollenId;
    }
}
