<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AppAnsichtenRbacRechte
 *
 * @ORM\Table(name="app_ansichten_rbac_rechte")
 * @ORM\Entity
 */
class AppAnsichtenRbacRechte
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ansicht_id", type="bigint", nullable=false)
     */
    private $ansichtId;

    /**
     * @var integer
     *
     * @ORM\Column(name="recht_id", type="bigint", nullable=false)
     */
    private $rechtId;

    /**
     * @var integer
     *
     * @ORM\Column(name="ansicht_recht_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ansichtRechtId;



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

    /**
     * Get ansichtRechtId
     *
     * @return integer 
     */
    public function getAnsichtRechtId()
    {
        return $this->ansichtRechtId;
    }
}
