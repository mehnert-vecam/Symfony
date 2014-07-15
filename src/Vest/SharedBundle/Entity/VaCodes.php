<?php

namespace Vest\SharedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VaCodes
 */
class VaCodes
{
    /**
     * @var integer
     */
    private $eventCodesId;

    /**
     * @var string
     */
    private $userId;

    /**
     * @var string
     */
    private $eventCodeValue;

    /**
     * @var string
     */
    private $veranstaltungTag;

    /**
     * @var integer
     */
    private $datumId;


    /**
     * Get eventCodesId
     *
     * @return integer 
     */
    public function getEventCodesId()
    {
        return $this->eventCodesId;
    }

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
}
