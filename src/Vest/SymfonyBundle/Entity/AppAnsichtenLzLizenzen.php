<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AppAnsichtenLzLizenzen
 *
 * @ORM\Table(name="app_ansichten_lz_lizenzen")
 * @ORM\Entity
 */
class AppAnsichtenLzLizenzen
{
    /**
     * @var integer
     *
     * @ORM\Column(name="lizenz_id", type="integer", nullable=false)
     */
    private $lizenzId;

    /**
     * @var integer
     *
     * @ORM\Column(name="ansicht_id", type="integer", nullable=false)
     */
    private $ansichtId;

    /**
     * @var integer
     *
     * @ORM\Column(name="ansicht_lizenz_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
