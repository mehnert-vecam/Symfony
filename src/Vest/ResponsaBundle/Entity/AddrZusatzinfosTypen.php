<?php

namespace Vest\ResponsaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AddrZusatzinfosTypen
 */
class AddrZusatzinfosTypen
{
    /**
     * @var integer
     */
    private $zusatzinfoTypId;

    /**
     * @var string
     */
    private $zusatzinfoTypName;


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
}
