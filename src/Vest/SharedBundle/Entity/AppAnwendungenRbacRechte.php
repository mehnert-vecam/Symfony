<?php

namespace Vest\SharedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AppAnwendungenRbacRechte
 */
class AppAnwendungenRbacRechte
{
    /**
     * @var integer
     */
    private $anwendungenRechteId;

    /**
     * @var integer
     */
    private $anwendungId;

    /**
     * @var integer
     */
    private $rechtId;


    /**
     * Get anwendungenRechteId
     *
     * @return integer 
     */
    public function getAnwendungenRechteId()
    {
        return $this->anwendungenRechteId;
    }

    /**
     * Set anwendungId
     *
     * @param integer $anwendungId
     * @return AppAnwendungenRbacRechte
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
     * Set rechtId
     *
     * @param integer $rechtId
     * @return AppAnwendungenRbacRechte
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
