<?php

namespace Vest\SharedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RbacRechte
 */
class RbacRechte
{
    /**
     * @var integer
     */
    private $rechtId;

    /**
     * @var string
     */
    private $rechtName;

    /**
     * @var string
     */
    private $rechtBeschreibung;

    /**
     * @var string
     */
    private $rechtWert;

    private $rollen;


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
     * Set rechtName
     *
     * @param string $rechtName
     * @return RbacRechte
     */
    public function setRechtName($rechtName)
    {
        $this->rechtName = $rechtName;

        return $this;
    }

    /**
     * Get rechtName
     *
     * @return string 
     */
    public function getRechtName()
    {
        return $this->rechtName;
    }

    /**
     * Set rechtBeschreibung
     *
     * @param string $rechtBeschreibung
     * @return RbacRechte
     */
    public function setRechtBeschreibung($rechtBeschreibung)
    {
        $this->rechtBeschreibung = $rechtBeschreibung;

        return $this;
    }

    /**
     * Get rechtBeschreibung
     *
     * @return string 
     */
    public function getRechtBeschreibung()
    {
        return $this->rechtBeschreibung;
    }

    /**
     * Set rechtWert
     *
     * @param string $rechtWert
     * @return RbacRechte
     */
    public function setRechtWert($rechtWert)
    {
        $this->rechtWert = $rechtWert;

        return $this;
    }

    /**
     * Get rechtWert
     *
     * @return string 
     */
    public function getRechtWert()
    {
        return $this->rechtWert;
    }

    /**
     * @param mixed $rollen
     */
    public function setRollen($rollen)
    {
        $this->rollen = $rollen;
    }

    /**
     * @return mixed
     */
    public function getRollen()
    {
        return $this->rollen;
    }

}
