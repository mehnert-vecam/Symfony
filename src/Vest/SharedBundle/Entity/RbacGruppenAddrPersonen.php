<?php

namespace Vest\SharedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RbacGruppenAddrPersonen
 */
class RbacGruppenAddrPersonen
{
    /**
     * @var integer
     */
    private $gruppePersonId;

    /**
     * @var integer
     */
    private $gruppeId;

    /**
     * @var integer
     */
    private $personId;

    /**
     * @var integer
     */
    private $kontaktspezifischId;


    /**
     * Get gruppePersonId
     *
     * @return integer 
     */
    public function getGruppePersonId()
    {
        return $this->gruppePersonId;
    }

    /**
     * Set gruppeId
     *
     * @param integer $gruppeId
     * @return RbacGruppenAddrPersonen
     */
    public function setGruppeId($gruppeId)
    {
        $this->gruppeId = $gruppeId;

        return $this;
    }

    /**
     * Get gruppeId
     *
     * @return integer 
     */
    public function getGruppeId()
    {
        return $this->gruppeId;
    }

    /**
     * Set personId
     *
     * @param integer $personId
     * @return RbacGruppenAddrPersonen
     */
    public function setPersonId($personId)
    {
        $this->personId = $personId;

        return $this;
    }

    /**
     * Get personId
     *
     * @return integer 
     */
    public function getPersonId()
    {
        return $this->personId;
    }

    /**
     * Set kontaktspezifischId
     *
     * @param integer $kontaktspezifischId
     * @return RbacGruppenAddrPersonen
     */
    public function setKontaktspezifischId($kontaktspezifischId)
    {
        $this->kontaktspezifischId = $kontaktspezifischId;

        return $this;
    }

    /**
     * Get kontaktspezifischId
     *
     * @return integer 
     */
    public function getKontaktspezifischId()
    {
        return $this->kontaktspezifischId;
    }
}
