<?php

namespace Vest\ResponsaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RvRaum
 */
class RvRaum
{
    /**
     * @var integer
     */
    private $raumId;

    /**
     * @var string
     */
    private $kontaktId;


    /**
     * Get raumId
     *
     * @return integer 
     */
    public function getRaumId()
    {
        return $this->raumId;
    }

    /**
     * Set kontaktId
     *
     * @param string $kontaktId
     * @return RvRaum
     */
    public function setKontaktId($kontaktId)
    {
        $this->kontaktId = $kontaktId;

        return $this;
    }

    /**
     * Get kontaktId
     *
     * @return string 
     */
    public function getKontaktId()
    {
        return $this->kontaktId;
    }
}
