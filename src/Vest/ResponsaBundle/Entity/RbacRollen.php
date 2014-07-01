<?php

namespace Vest\ResponsaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RbacRollen
 */
class RbacRollen
{
    /**
     * @var integer
     */
    private $rolleId;

    /**
     * @var integer
     */
    private $kontaktId;

    /**
     * @var string
     */
    private $rolleName;

    /**
     * @var string
     */
    private $rolleBeschreibung;

    /**
     * @var integer
     */
    private $rolleParentId;

    /**
     * @var boolean
     */
    private $rolleKontaktspezifisch;

    /**
     * @var integer
     */
    private $rolleLizenzspezifisch;

    /**
     * @var boolean
     */
    private $rolleEssentiell;

    /**
     * @var integer
     */
    private $rolleSchutz;


    /**
     * Get rolleId
     *
     * @return integer 
     */
    public function getRolleId()
    {
        return $this->rolleId;
    }

    /**
     * Set kontaktId
     *
     * @param integer $kontaktId
     * @return RbacRollen
     */
    public function setKontaktId($kontaktId)
    {
        $this->kontaktId = $kontaktId;

        return $this;
    }

    /**
     * Get kontaktId
     *
     * @return integer 
     */
    public function getKontaktId()
    {
        return $this->kontaktId;
    }

    /**
     * Set rolleName
     *
     * @param string $rolleName
     * @return RbacRollen
     */
    public function setRolleName($rolleName)
    {
        $this->rolleName = $rolleName;

        return $this;
    }

    /**
     * Get rolleName
     *
     * @return string 
     */
    public function getRolleName()
    {
        return $this->rolleName;
    }

    /**
     * Set rolleBeschreibung
     *
     * @param string $rolleBeschreibung
     * @return RbacRollen
     */
    public function setRolleBeschreibung($rolleBeschreibung)
    {
        $this->rolleBeschreibung = $rolleBeschreibung;

        return $this;
    }

    /**
     * Get rolleBeschreibung
     *
     * @return string 
     */
    public function getRolleBeschreibung()
    {
        return $this->rolleBeschreibung;
    }

    /**
     * Set rolleParentId
     *
     * @param integer $rolleParentId
     * @return RbacRollen
     */
    public function setRolleParentId($rolleParentId)
    {
        $this->rolleParentId = $rolleParentId;

        return $this;
    }

    /**
     * Get rolleParentId
     *
     * @return integer 
     */
    public function getRolleParentId()
    {
        return $this->rolleParentId;
    }

    /**
     * Set rolleKontaktspezifisch
     *
     * @param boolean $rolleKontaktspezifisch
     * @return RbacRollen
     */
    public function setRolleKontaktspezifisch($rolleKontaktspezifisch)
    {
        $this->rolleKontaktspezifisch = $rolleKontaktspezifisch;

        return $this;
    }

    /**
     * Get rolleKontaktspezifisch
     *
     * @return boolean 
     */
    public function getRolleKontaktspezifisch()
    {
        return $this->rolleKontaktspezifisch;
    }

    /**
     * Set rolleLizenzspezifisch
     *
     * @param integer $rolleLizenzspezifisch
     * @return RbacRollen
     */
    public function setRolleLizenzspezifisch($rolleLizenzspezifisch)
    {
        $this->rolleLizenzspezifisch = $rolleLizenzspezifisch;

        return $this;
    }

    /**
     * Get rolleLizenzspezifisch
     *
     * @return integer 
     */
    public function getRolleLizenzspezifisch()
    {
        return $this->rolleLizenzspezifisch;
    }

    /**
     * Set rolleEssentiell
     *
     * @param boolean $rolleEssentiell
     * @return RbacRollen
     */
    public function setRolleEssentiell($rolleEssentiell)
    {
        $this->rolleEssentiell = $rolleEssentiell;

        return $this;
    }

    /**
     * Get rolleEssentiell
     *
     * @return boolean 
     */
    public function getRolleEssentiell()
    {
        return $this->rolleEssentiell;
    }

    /**
     * Set rolleSchutz
     *
     * @param integer $rolleSchutz
     * @return RbacRollen
     */
    public function setRolleSchutz($rolleSchutz)
    {
        $this->rolleSchutz = $rolleSchutz;

        return $this;
    }

    /**
     * Get rolleSchutz
     *
     * @return integer 
     */
    public function getRolleSchutz()
    {
        return $this->rolleSchutz;
    }
}
