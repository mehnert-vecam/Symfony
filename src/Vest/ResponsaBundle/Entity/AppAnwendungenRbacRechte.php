<?php

namespace Vest\ResponsaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AppAnwendungenRbacRechte
 */
class AppAnwendungenRbacRechte
{
    /**
     * @var integer
     */
    private $anwendungId;

    /**
     * @var integer
     */
    private $rechtId;

    /**
     * @var integer
     */
    private $anwendungenRechteId;


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

    /**
     * Get anwendungenRechteId
     *
     * @return integer 
     */
    public function getAnwendungenRechteId()
    {
        return $this->anwendungenRechteId;
    }
}
