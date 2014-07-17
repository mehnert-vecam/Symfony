<?php

namespace Vest\ResponsaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RvRaum
 */
class RvRaum
{
    /**
     * @var string
     */
    private $kontaktId;

    /**
     * @var integer
     */
    private $raumId;


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

    /**
     * Get raumId
     *
     * @return integer 
     */
    public function getRaumId()
    {
        return $this->raumId;
    }
}
