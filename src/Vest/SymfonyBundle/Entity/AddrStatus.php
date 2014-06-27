<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AddrStatus
 *
 * @ORM\Table(name="addr_status")
 * @ORM\Entity
 */
class AddrStatus
{
    /**
     * @var string
     *
     * @ORM\Column(name="status_objekt", type="string", length=150, nullable=true)
     */
    private $statusObjekt;

    /**
     * @var integer
     *
     * @ORM\Column(name="status_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $statusId;



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

    /**
     * Get statusId
     *
     * @return integer 
     */
    public function getStatusId()
    {
        return $this->statusId;
    }
}
