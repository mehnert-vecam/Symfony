<?php

namespace Vest\SharedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AppAnsichtenRbacRechte
 */
class AppAnsichtenRbacRechte
{
    /**
     * @var integer
     */
    private $ansichtRechtId;

    /**
     * @var integer
     */
    private $ansichtId;

    /**
     * @var integer
     */
    private $rechtId;


    /**
     * Get ansichtRechtId
     *
     * @return integer 
     */
    public function getAnsichtRechtId()
    {
        return $this->ansichtRechtId;
    }

    /**
     * Set ansichtId
     *
     * @param integer $ansichtId
     * @return AppAnsichtenRbacRechte
     */
    public function setAnsichtId($ansichtId)
    {
        $this->ansichtId = $ansichtId;

        return $this;
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

    /**
     * Set rechtId
     *
     * @param integer $rechtId
     * @return AppAnsichtenRbacRechte
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
