<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RbacGruppenAddrPersonen
 *
 * @ORM\Table(name="rbac_gruppen_addr_personen")
 * @ORM\Entity
 */
class RbacGruppenAddrPersonen
{
    /**
     * @var integer
     *
     * @ORM\Column(name="gruppe_id", type="bigint", nullable=false)
     */
    private $gruppeId;

    /**
     * @var integer
     *
     * @ORM\Column(name="person_id", type="bigint", nullable=false)
     */
    private $personId;

    /**
     * @var integer
     *
     * @ORM\Column(name="kontaktspezifisch_id", type="bigint", nullable=false)
     */
    private $kontaktspezifischId;

    /**
     * @var integer
     *
     * @ORM\Column(name="gruppe_person_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $gruppePersonId;



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

    /**
     * Get gruppePersonId
     *
     * @return integer 
     */
    public function getGruppePersonId()
    {
        return $this->gruppePersonId;
    }
}
