<?php

namespace Vest\SharedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NlTemplates
 */
class NlTemplates
{
    /**
     * @var integer
     */
    private $templateId;

    /**
     * @var string
     */
    private $templateName;

    /**
     * @var string
     */
    private $templateObjekt;

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
     * Set templateName
     *
     * @param string $templateName
     * @return NlTemplates
     */
    public function setTemplateName($templateName)
    {
        $this->templateName = $templateName;

        return $this;
    }

    /**
     * Get templateName
     *
     * @return string 
     */
    public function getTemplateName()
    {
        return $this->templateName;
    }

    /**
     * Set templateObjekt
     *
     * @param string $templateObjekt
     * @return NlTemplates
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
     * Set kontaktId
     *
     * @param integer $kontaktId
     * @return NlTemplates
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
