<?php

namespace Vest\SharedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AppAnwendungenRbacRollen
 */
class AppAnwendungenRbacRollen
{
    /**
     * @var integer
     */
    private $anwendungenRollenId;

    /**
     * @var integer
     */
    private $anwendungId;

    /**
     * @var integer
     */
    private $rolleId;

    private $anwendung;

    /**
     * @param mixed $anwendung
     */
    public function setAnwendung($anwendung)
    {
        $this->anwendung = $anwendung;
    }

    /**
     * @return mixed
     */
    public function getAnwendung()
    {
        return $this->anwendung;
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
}
