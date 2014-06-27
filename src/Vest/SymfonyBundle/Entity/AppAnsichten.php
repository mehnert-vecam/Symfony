<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AppAnsichten
 *
 * @ORM\Table(name="app_ansichten")
 * @ORM\Entity
 */
class AppAnsichten
{
    /**
     * @var integer
     *
     * @ORM\Column(name="anwendung_id", type="integer", nullable=false)
     */
    private $anwendungId;

    /**
     * @var string
     *
     * @ORM\Column(name="ansicht_name", type="string", length=255, nullable=false)
     */
    private $ansichtName;

    /**
     * @var string
     *
     * @ORM\Column(name="ansicht_kurzname", type="string", length=255, nullable=false)
     */
    private $ansichtKurzname;

    /**
     * @var string
     *
     * @ORM\Column(name="ansicht_status", type="string", length=10, nullable=false)
     */
    private $ansichtStatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="ansicht_prio", type="integer", nullable=false)
     */
    private $ansichtPrio;

    /**
     * @var integer
     *
     * @ORM\Column(name="ansicht_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ansichtId;



    /**
     * Set anwendungId
     *
     * @param integer $anwendungId
     * @return AppAnsichten
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
     * Set ansichtName
     *
     * @param string $ansichtName
     * @return AppAnsichten
     */
    public function setAnsichtName($ansichtName)
    {
        $this->ansichtName = $ansichtName;

        return $this;
    }

    /**
     * Get ansichtName
     *
     * @return string 
     */
    public function getAnsichtName()
    {
        return $this->ansichtName;
    }

    /**
     * Set ansichtKurzname
     *
     * @param string $ansichtKurzname
     * @return AppAnsichten
     */
    public function setAnsichtKurzname($ansichtKurzname)
    {
        $this->ansichtKurzname = $ansichtKurzname;

        return $this;
    }

    /**
     * Get ansichtKurzname
     *
     * @return string 
     */
    public function getAnsichtKurzname()
    {
        return $this->ansichtKurzname;
    }

    /**
     * Set ansichtStatus
     *
     * @param string $ansichtStatus
     * @return AppAnsichten
     */
    public function setAnsichtStatus($ansichtStatus)
    {
        $this->ansichtStatus = $ansichtStatus;

        return $this;
    }

    /**
     * Get ansichtStatus
     *
     * @return string 
     */
    public function getAnsichtStatus()
    {
        return $this->ansichtStatus;
    }

    /**
     * Set ansichtPrio
     *
     * @param integer $ansichtPrio
     * @return AppAnsichten
     */
    public function setAnsichtPrio($ansichtPrio)
    {
        $this->ansichtPrio = $ansichtPrio;

        return $this;
    }

    /**
     * Get ansichtPrio
     *
     * @return integer 
     */
    public function getAnsichtPrio()
    {
        return $this->ansichtPrio;
    }

    /**
     * Get ansichtId
     *
     * @return integer 
     */
    public function getAnsichtId()
    {
        return $this->ansichtId;
    }
}
