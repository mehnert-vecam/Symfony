<?php

namespace Vest\SharedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AddrStatus
 */
class AddrStatus
{
    /**
     * @var integer
     */
    private $statusId;

    /**
     * @var string
     */
    private $statusObjekt;


    /**
     * Get statusId
     *
     * @return integer 
     */
    public function getStatusId()
    {
        return $this->statusId;
    }

    /**
     * Set statusObjekt
     *
     * @param string $statusObjekt
     * @return AddrStatus
     */
    public function setStatusObjekt($statusObjekt)
    {
        $this->statusObjekt = $statusObjekt;

        return $this;
    }

    /**
     * Get statusObjekt
     *
     * @return string 
     */
    public function getStatusObjekt()
    {
        return $this->statusObjekt;
    }
}
