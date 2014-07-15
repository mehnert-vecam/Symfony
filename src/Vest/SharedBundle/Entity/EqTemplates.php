<?php

namespace Vest\SharedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EqTemplates
 */
class EqTemplates
{
    /**
     * @var integer
     */
    private $templateId;

    /**
     * @var string
     */
    private $templateObjekt;

    /**
     * @var string
     */
    private $templateStatus;

    /**
     * @var integer
     */
    private $anlassId;

    /**
     * @var integer
     */
    private $kontaktId;


    /**
     * Get templateId
     *
     * @return integer 
     */
    public function getTemplateId()
    {
        return $this->templateId;
    }

    /**
     * Set templateObjekt
     *
     * @param string $templateObjekt
     * @return EqTemplates
     */
    public function setTemplateObjekt($templateObjekt)
    {
        $this->templateObjekt = $templateObjekt;

        return $this;
    }

    /**
     * Get templateObjekt
     *
     * @return string 
     */
    public function getTemplateObjekt()
    {
        return $this->templateObjekt;
    }

    /**
     * Set templateStatus
     *
     * @param string $templateStatus
     * @return EqTemplates
     */
    public function setTemplateStatus($templateStatus)
    {
        $this->templateStatus = $templateStatus;

        return $this;
    }

    /**
     * Get templateStatus
     *
     * @return string 
     */
    public function getTemplateStatus()
    {
        return $this->templateStatus;
    }

    /**
     * Set anlassId
     *
     * @param integer $anlassId
     * @return EqTemplates
     */
    public function setAnlassId($anlassId)
    {
        $this->anlassId = $anlassId;

        return $this;
    }

    /**
     * Get anlassId
     *
     * @return integer 
     */
    public function getAnlassId()
    {
        return $this->anlassId;
    }

    /**
     * Set kontaktId
     *
     * @param integer $kontaktId
     * @return EqTemplates
     */
    public function setKontaktId($kontaktId)
    {
        $this->kontaktId = $kontaktId;

        return $this;
    }

    /**
     * Get kontaktId
     *
     * @return integer 
     */
    public function getKontaktId()
    {
        return $this->kontaktId;
    }
}
