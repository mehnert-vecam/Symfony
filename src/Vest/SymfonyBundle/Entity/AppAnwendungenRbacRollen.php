<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AppAnwendungenRbacRollen
 *
 * @ORM\Table(name="app_anwendungen_rbac_rollen")
 * @ORM\Entity
 */
class AppAnwendungenRbacRollen
{
    /**
     * @var integer
     *
     * @ORM\Column(name="anwendung_id", type="integer", nullable=false)
     */
    private $anwendungId;

    /**
     * @var integer
     *
     * @ORM\Column(name="rolle_id", type="integer", nullable=false)
     */
    private $rolleId;

    /**
     * @var integer
     *
     * @ORM\Column(name="anwendungen_rollen_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $anwendungenRollenId;



    /**
     * Set anwendungId
     *
     * @param integer $anwendungId
     * @return AppAnwendungenRbacRollen
     */
    public function setAnwendungId($anwendungId)
    {
        $this->anwendungId = $anwendungId;

        return $this;
    }

    /**
     * Get anwendungId
     *
     * @return integer 
     */
    public function getAnwendungId()
    {
        return $this->anwendungId;
    }

    /**
     * Set rolleId
     *
     * @param integer $rolleId
     * @return AppAnwendungenRbacRollen
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
     * Get anwendungenRollenId
     *
     * @return integer 
     */
    public function getAnwendungenRollenId()
    {
        return $this->anwendungenRollenId;
    }
}
