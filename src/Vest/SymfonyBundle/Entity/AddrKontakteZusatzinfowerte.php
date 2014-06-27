<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AddrKontakteZusatzinfowerte
 *
 * @ORM\Table(name="addr_kontakte_zusatzinfowerte")
 * @ORM\Entity
 */
class AddrKontakteZusatzinfowerte
{
    /**
     * @var integer
     *
     * @ORM\Column(name="gruppe_kontakt_id", type="bigint", nullable=false)
     */
    private $gruppeKontaktId;

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
     * Set gruppeKontaktId
     *
     * @param integer $gruppeKontaktId
     * @return AddrKontakteZusatzinfowerte
     */
    public function setGruppeKontaktId($gruppeKontaktId)
    {
        $this->gruppeKontaktId = $gruppeKontaktId;

        return $this;
    }

    /**
     * Get gruppeKontaktId
     *
     * @return integer 
     */
    public function getGruppeKontaktId()
    {
        return $this->gruppeKontaktId;
    }

    /**
     * Set zusatzinfowertObjekt
     *
     * @param string $zusatzinfowertObjekt
     * @return AddrKontakteZusatzinfowerte
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
     * @return AddrKontakteZusatzinfowerte
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
