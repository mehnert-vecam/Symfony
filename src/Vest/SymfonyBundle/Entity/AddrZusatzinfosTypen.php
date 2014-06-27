<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AddrZusatzinfosTypen
 *
 * @ORM\Table(name="addr_zusatzinfos_typen")
 * @ORM\Entity
 */
class AddrZusatzinfosTypen
{
    /**
     * @var string
     *
     * @ORM\Column(name="zusatzinfo_typ_name", type="string", length=255, nullable=false)
     */
    private $zusatzinfoTypName;

    /**
     * @var integer
     *
     * @ORM\Column(name="zusatzinfo_typ_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $zusatzinfoTypId;



    /**
     * Set zusatzinfoTypName
     *
     * @param string $zusatzinfoTypName
     * @return AddrZusatzinfosTypen
     */
    public function setZusatzinfoTypName($zusatzinfoTypName)
    {
        $this->zusatzinfoTypName = $zusatzinfoTypName;

        return $this;
    }

    /**
     * Get zusatzinfoTypName
     *
     * @return string 
     */
    public function getZusatzinfoTypName()
    {
        return $this->zusatzinfoTypName;
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
}
