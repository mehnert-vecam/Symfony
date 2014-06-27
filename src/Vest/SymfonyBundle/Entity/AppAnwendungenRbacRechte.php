<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AppAnwendungenRbacRechte
 *
 * @ORM\Table(name="app_anwendungen_rbac_rechte")
 * @ORM\Entity
 */
class AppAnwendungenRbacRechte
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
     * @ORM\Column(name="recht_id", type="integer", nullable=false)
     */
    private $rechtId;

    /**
     * @var integer
     *
     * @ORM\Column(name="anwendungen_rechte_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
