<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RbacRechte
 *
 * @ORM\Table(name="rbac_rechte")
 * @ORM\Entity
 */
class RbacRechte
{
    /**
     * @var string
     *
     * @ORM\Column(name="recht_name", type="string", length=255, nullable=false)
     */
    private $rechtName;

    /**
     * @var string
     *
     * @ORM\Column(name="recht_beschreibung", type="text", nullable=false)
     */
    private $rechtBeschreibung;

    /**
     * @var string
     *
     * @ORM\Column(name="recht_wert", type="string", length=255, nullable=false)
     */
    private $rechtWert;

    /**
     * @var integer
     *
     * @ORM\Column(name="recht_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $rechtId;



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
     * Get rechtId
     *
     * @return integer 
     */
    public function getRechtId()
    {
        return $this->rechtId;
    }
}
