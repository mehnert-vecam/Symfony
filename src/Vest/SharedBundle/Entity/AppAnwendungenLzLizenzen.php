<?php

namespace Vest\SharedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AppAnwendungenLzLizenzen
 */
class AppAnwendungenLzLizenzen
{
    /**
     * @var integer
     */
    private $anwendungLizenzId;

    /**
     * @var integer
     */
    private $anwendungId;

    /**
     * @var integer
     */
    private $lizenzId;


    /**
     * Get anwendungLizenzId
     *
     * @return integer 
     */
    public function getAnwendungLizenzId()
    {
        return $this->anwendungLizenzId;
    }

    /**
     * Set anwendungId
     *
     * @param integer $anwendungId
     * @return AppAnwendungenLzLizenzen
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
     * Set lizenzId
     *
     * @param integer $lizenzId
     * @return AppAnwendungenLzLizenzen
     */
    public function setLizenzId($lizenzId)
    {
        $this->lizenzId = $lizenzId;

        return $this;
    }

    /**
     * Get lizenzId
     *
     * @return integer 
     */
    public function getLizenzId()
    {
        return $this->lizenzId;
    }
}
