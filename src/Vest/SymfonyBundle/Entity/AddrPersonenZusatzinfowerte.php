<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AddrPersonenZusatzinfowerte
 *
 * @ORM\Table(name="addr_personen_zusatzinfowerte")
 * @ORM\Entity
 */
class AddrPersonenZusatzinfowerte
{
    /**
     * @var integer
     *
     * @ORM\Column(name="gruppe_person_id", type="bigint", nullable=false)
     */
    private $gruppePersonId;

    /**
     * @var string
     *
     * @ORM\Column(name="zusatzinfowert_objekt", type="text", nullable=false)
     */
    private $zusatzinfowertObjekt;

    /**
     * @var string
     *
     * @ORM\Column(name="zusatzinfo_id", type="string", length=45, nullable=false)
     */
    private $zusatzinfoId;

    /**
     * @var integer
     *
     * @ORM\Column(name="zusatzinfowert_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $zusatzinfowertId;



    /**
     * Set gruppePersonId
     *
     * @param integer $gruppePersonId
     * @return AddrPersonenZusatzinfowerte
     */
    public function setGruppePersonId($gruppePersonId)
    {
        $this->gruppePersonId = $gruppePersonId;

        return $this;
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

    /**
     * Set zusatzinfowertObjekt
     *
     * @param string $zusatzinfowertObjekt
     * @return AddrPersonenZusatzinfowerte
     */
    public function setZusatzinfowertObjekt($zusatzinfowertObjekt)
    {
        $this->zusatzinfowertObjekt = $zusatzinfowertObjekt;

        return $this;
    }

    /**
     * Get zusatzinfowertObjekt
     *
     * @return string 
     */
    public function getZusatzinfowertObjekt()
    {
        return $this->zusatzinfowertObjekt;
    }

    /**
     * Set zusatzinfoId
     *
     * @param string $zusatzinfoId
     * @return AddrPersonenZusatzinfowerte
     */
    public function setZusatzinfoId($zusatzinfoId)
    {
        $this->zusatzinfoId = $zusatzinfoId;

        return $this;
    }

    /**
     * Get zusatzinfoId
     *
     * @return string 
     */
    public function getZusatzinfoId()
    {
        return $this->zusatzinfoId;
    }

    /**
     * Get zusatzinfowertId
     *
     * @return integer 
     */
    public function getZusatzinfowertId()
    {
        return $this->zusatzinfowertId;
    }
}
