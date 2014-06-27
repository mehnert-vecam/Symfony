<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VaVeranstaltungenAddrPersonen
 *
 * @ORM\Table(name="va_veranstaltungen_addr_personen")
 * @ORM\Entity
 */
class VaVeranstaltungenAddrPersonen
{
    /**
     * @var string
     *
     * @ORM\Column(name="veranstaltung_tag", type="string", length=50, nullable=false)
     */
    private $veranstaltungTag;

    /**
     * @var integer
     *
     * @ORM\Column(name="person_id", type="bigint", nullable=false)
     */
    private $personId;

    /**
     * @var integer
     *
     * @ORM\Column(name="veranstaltung_person_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $veranstaltungPersonId;



    /**
     * Set veranstaltungTag
     *
     * @param string $veranstaltungTag
     * @return VaVeranstaltungenAddrPersonen
     */
    public function setVeranstaltungTag($veranstaltungTag)
    {
        $this->veranstaltungTag = $veranstaltungTag;

        return $this;
    }

    /**
     * Get veranstaltungTag
     *
     * @return string 
     */
    public function getVeranstaltungTag()
    {
        return $this->veranstaltungTag;
    }

    /**
     * Set personId
     *
     * @param integer $personId
     * @return VaVeranstaltungenAddrPersonen
     */
    public function setPersonId($personId)
    {
        $this->personId = $personId;

        return $this;
    }

    /**
     * Get personId
     *
     * @return integer 
     */
    public function getPersonId()
    {
        return $this->personId;
    }

    /**
     * Get veranstaltungPersonId
     *
     * @return integer 
     */
    public function getVeranstaltungPersonId()
    {
        return $this->veranstaltungPersonId;
    }
}
