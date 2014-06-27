<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NlTemplates
 *
 * @ORM\Table(name="nl_templates")
 * @ORM\Entity
 */
class NlTemplates
{
    /**
     * @var string
     *
     * @ORM\Column(name="template_name", type="string", length=45, nullable=true)
     */
    private $templateName;

    /**
     * @var string
     *
     * @ORM\Column(name="template_objekt", type="text", nullable=true)
     */
    private $templateObjekt;

    /**
     * @var integer
     *
     * @ORM\Column(name="kontakt_id", type="bigint", nullable=true)
     */
    private $kontaktId;

    /**
     * @var integer
     *
     * @ORM\Column(name="template_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $templateId;



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

    /**
     * Get templateId
     *
     * @return integer 
     */
    public function getTemplateId()
    {
        return $this->templateId;
    }
}
