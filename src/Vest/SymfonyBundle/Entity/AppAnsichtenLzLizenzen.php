<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AppAnsichtenLzLizenzen
 */
class AppAnsichtenLzLizenzen
{
    /**
     * @var integer
     */
    private $lizenzId;

    /**
     * @var integer
     */
    private $ansichtId;

    /**
     * @var integer
     */
    private $ansichtLizenzId;


    /**
     * Set lizenzId
     *
     * @param integer $lizenzId
     * @return AppAnsichtenLzLizenzen
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
     * Set ansichtId
     *
     * @param integer $ansichtId
     * @return AppAnsichtenLzLizenzen
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
     * Get ansichtLizenzId
     *
     * @return integer 
     */
    public function getAnsichtLizenzId()
    {
        return $this->ansichtLizenzId;
    }
}
