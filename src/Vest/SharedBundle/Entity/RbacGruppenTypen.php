<?php

namespace Vest\SharedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RbacGruppenTypen
 */
class RbacGruppenTypen
{
    /**
     * @var integer
     */
    private $gruppeTypId;

    /**
     * @var string
     */
    private $gruppeTypName;


    /**
     * Get gruppeTypId
     *
     * @return integer 
     */
    public function getGruppeTypId()
    {
        return $this->gruppeTypId;
    }

    /**
     * Set gruppeTypName
     *
     * @param string $gruppeTypName
     * @return RbacGruppenTypen
     */
    public function setGruppeTypName($gruppeTypName)
    {
        $this->gruppeTypName = $gruppeTypName;

        return $this;
    }

    /**
     * Get gruppeTypName
     *
     * @return string 
     */
    public function getGruppeTypName()
    {
        return $this->gruppeTypName;
    }
}
