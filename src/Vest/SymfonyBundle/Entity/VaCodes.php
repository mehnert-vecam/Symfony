<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VaCodes
 *
 * @ORM\Table(name="va_codes")
 * @ORM\Entity
 */
class VaCodes
{
    /**
     * @var string
     *
     * @ORM\Column(name="user_id", type="string", length=45, nullable=true)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="event_code_value", type="string", length=45, nullable=true)
     */
    private $eventCodeValue;

    /**
     * @var string
     *
     * @ORM\Column(name="veranstaltung_tag", type="string", length=45, nullable=true)
     */
    private $veranstaltungTag;

    /**
     * @var integer
     *
     * @ORM\Column(name="datum_id", type="bigint", nullable=true)
     */
    private $datumId;

    /**
     * @var integer
     *
     * @ORM\Column(name="event_codes_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $eventCodesId;



    /**
     * Set userId
     *
     * @param string $userId
     * @return VaCodes
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return string 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set eventCodeValue
     *
     * @param string $eventCodeValue
     * @return VaCodes
     */
    public function setEventCodeValue($eventCodeValue)
    {
        $this->eventCodeValue = $eventCodeValue;

        return $this;
    }

    /**
     * Get eventCodeValue
     *
     * @return string 
     */
    public function getEventCodeValue()
    {
        return $this->eventCodeValue;
    }

    /**
     * Set veranstaltungTag
     *
     * @param string $veranstaltungTag
     * @return VaCodes
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
     * Set datumId
     *
     * @param integer $datumId
     * @return VaCodes
     */
    public function setDatumId($datumId)
    {
        $this->datumId = $datumId;

        return $this;
    }

    /**
     * Get datumId
     *
     * @return integer 
     */
    public function getDatumId()
    {
        return $this->datumId;
    }

    /**
     * Get eventCodesId
     *
     * @return integer 
     */
    public function getEventCodesId()
    {
        return $this->eventCodesId;
    }
}
