<?php

namespace Vest\ResponsaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AppAnsichten
 */
class AppAnsichten
{
    /**
     * @var integer
     */
    private $ansichtId;

    /**
     * @var integer
     */
    private $anwendungId;

    /**
     * @var string
     */
    private $ansichtName;

    /**
     * @var string
     */
    private $ansichtKurzname;

    /**
     * @var string
     */
    private $ansichtStatus;

    /**
     * @var integer
     */
    private $ansichtPrio;


    /**
     * Get ansichtId
     *
     * @return integer 
     */
    public function getAnsichtId()
    {
        return $this->ansichtId;
    }

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
}
