<?php

namespace Vest\ResponsaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VaVeranstaltungenAddrPersonen
 */
class VaVeranstaltungenAddrPersonen
{
    /**
     * @var string
     */
    private $veranstaltungTag;

    /**
     * @var integer
     */
    private $personId;

    /**
     * @var integer
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
