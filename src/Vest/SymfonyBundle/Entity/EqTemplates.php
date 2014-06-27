<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EqTemplates
 *
 * @ORM\Table(name="eq_templates")
 * @ORM\Entity
 */
class EqTemplates
{
    /**
     * @var string
     *
     * @ORM\Column(name="template_objekt", type="text", nullable=true)
     */
    private $templateObjekt;

    /**
     * @var string
     *
     * @ORM\Column(name="template_status", type="string", length=200, nullable=true)
     */
    private $templateStatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="anlass_id", type="bigint", nullable=false)
     */
    private $anlassId;

    /**
     * @var integer
     *
     * @ORM\Column(name="kontakt_id", type="bigint", nullable=false)
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
