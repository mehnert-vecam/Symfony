<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AppAnwendungenLzLizenzen
 *
 * @ORM\Table(name="app_anwendungen_lz_lizenzen")
 * @ORM\Entity
 */
class AppAnwendungenLzLizenzen
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
     * @ORM\Column(name="lizenz_id", type="integer", nullable=false)
     */
    private $lizenzId;

    /**
     * @var integer
     *
     * @ORM\Column(name="anwendung_lizenz_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $anwendungLizenzId;



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

    /**
     * Get anwendungLizenzId
     *
     * @return integer 
     */
    public function getAnwendungLizenzId()
    {
        return $this->anwendungLizenzId;
    }
}
