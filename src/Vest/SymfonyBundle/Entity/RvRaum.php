<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RvRaum
 *
 * @ORM\Table(name="rv_raum")
 * @ORM\Entity
 */
class RvRaum
{
    /**
     * @var string
     *
     * @ORM\Column(name="kontakt_id", type="string", length=45, nullable=true)
     */
    private $kontaktId;

    /**
     * @var integer
     *
     * @ORM\Column(name="raum_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
