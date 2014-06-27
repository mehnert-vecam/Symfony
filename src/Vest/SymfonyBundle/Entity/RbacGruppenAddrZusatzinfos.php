<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RbacGruppenAddrZusatzinfos
 *
 * @ORM\Table(name="rbac_gruppen_addr_zusatzinfos")
 * @ORM\Entity
 */
class RbacGruppenAddrZusatzinfos
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
     * @ORM\Column(name="zusatzinfo_id", type="bigint", nullable=false)
     */
    private $zusatzinfoId;

    /**
     * @var string
     *
     * @ORM\Column(name="zusatzinfo_anzeigename", type="string", length=255, nullable=false)
     */
    private $zusatzinfoAnzeigename;

    /**
     * @var integer
     *
     * @ORM\Column(name="zusatzinfo_typ_id", type="integer", nullable=false)
     */
    private $zusatzinfoTypId;

    /**
     * @var integer
     *
     * @ORM\Column(name="gruppe_zusatzinfo_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $gruppeZusatzinfoId;



    /**
     * Set gruppeId
     *
     * @param integer $gruppeId
     * @return RbacGruppenAddrZusatzinfos
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
     * Set zusatzinfoId
     *
     * @param integer $zusatzinfoId
     * @return RbacGruppenAddrZusatzinfos
     */
    public function setZusatzinfoId($zusatzinfoId)
    {
        $this->zusatzinfoId = $zusatzinfoId;

        return $this;
    }

    /**
     * Get zusatzinfoId
     *
     * @return integer 
     */
    public function getZusatzinfoId()
    {
        return $this->zusatzinfoId;
    }

    /**
     * Set zusatzinfoAnzeigename
     *
     * @param string $zusatzinfoAnzeigename
     * @return RbacGruppenAddrZusatzinfos
     */
    public function setZusatzinfoAnzeigename($zusatzinfoAnzeigename)
    {
        $this->zusatzinfoAnzeigename = $zusatzinfoAnzeigename;

        return $this;
    }

    /**
     * Get zusatzinfoAnzeigename
     *
     * @return string 
     */
    public function getZusatzinfoAnzeigename()
    {
        return $this->zusatzinfoAnzeigename;
    }

    /**
     * Set zusatzinfoTypId
     *
     * @param integer $zusatzinfoTypId
     * @return RbacGruppenAddrZusatzinfos
     */
    public function setZusatzinfoTypId($zusatzinfoTypId)
    {
        $this->zusatzinfoTypId = $zusatzinfoTypId;

        return $this;
    }

    /**
     * Get zusatzinfoTypId
     *
     * @return integer 
     */
    public function getZusatzinfoTypId()
    {
        return $this->zusatzinfoTypId;
    }

    /**
     * Get gruppeZusatzinfoId
     *
     * @return integer 
     */
    public function getGruppeZusatzinfoId()
    {
        return $this->gruppeZusatzinfoId;
    }
}
