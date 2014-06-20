<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AppAnwendungenRbacRollen
 */
class AppAnwendungenRbacRollen
{
    /**
     * @var integer
     */
    private $anwendungId;

    /**
     * @var integer
     */
    private $rolleId;

    /**
     * @var integer
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
