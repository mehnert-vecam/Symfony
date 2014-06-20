<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NlAuftraege
 */
class NlAuftraege
{
    /**
     * @var integer
     */
    private $templateId;

    /**
     * @var string
     */
    private $auftragName;

    /**
     * @var \DateTime
     */
    private $auftragStart;

    /**
     * @var integer
     */
    private $kontaktId;

    /**
     * @var integer
     */
    private $auftragNewsAnzahl;

    /**
     * @var integer
     */
    private $auftragSeminareAnzahl;

    /**
     * @var integer
     */
    private $auftragBannerAnzahl;

    /**
     * @var string
     */
    private $auftragIdentifikation;

    /**
     * @var integer
     */
    private $auftragId;


    /**
     * Set templateId
     *
     * @param integer $templateId
     * @return NlAuftraege
     */
    public function setTemplateId($templateId)
    {
        $this->templateId = $templateId;

        return $this;
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

    /**
     * Set auftragName
     *
     * @param string $auftragName
     * @return NlAuftraege
     */
    public function setAuftragName($auftragName)
    {
        $this->auftragName = $auftragName;

        return $this;
    }

    /**
     * Get auftragName
     *
     * @return string 
     */
    public function getAuftragName()
    {
        return $this->auftragName;
    }

    /**
     * Set auftragStart
     *
     * @param \DateTime $auftragStart
     * @return NlAuftraege
     */
    public function setAuftragStart($auftragStart)
    {
        $this->auftragStart = $auftragStart;

        return $this;
    }

    /**
     * Get auftragStart
     *
     * @return \DateTime 
     */
    public function getAuftragStart()
    {
        return $this->auftragStart;
    }

    /**
     * Set kontaktId
     *
     * @param integer $kontaktId
     * @return NlAuftraege
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
     * Set auftragNewsAnzahl
     *
     * @param integer $auftragNewsAnzahl
     * @return NlAuftraege
     */
    public function setAuftragNewsAnzahl($auftragNewsAnzahl)
    {
        $this->auftragNewsAnzahl = $auftragNewsAnzahl;

        return $this;
    }

    /**
     * Get auftragNewsAnzahl
     *
     * @return integer 
     */
    public function getAuftragNewsAnzahl()
    {
        return $this->auftragNewsAnzahl;
    }

    /**
     * Set auftragSeminareAnzahl
     *
     * @param integer $auftragSeminareAnzahl
     * @return NlAuftraege
     */
    public function setAuftragSeminareAnzahl($auftragSeminareAnzahl)
    {
        $this->auftragSeminareAnzahl = $auftragSeminareAnzahl;

        return $this;
    }

    /**
     * Get auftragSeminareAnzahl
     *
     * @return integer 
     */
    public function getAuftragSeminareAnzahl()
    {
        return $this->auftragSeminareAnzahl;
    }

    /**
     * Set auftragBannerAnzahl
     *
     * @param integer $auftragBannerAnzahl
     * @return NlAuftraege
     */
    public function setAuftragBannerAnzahl($auftragBannerAnzahl)
    {
        $this->auftragBannerAnzahl = $auftragBannerAnzahl;

        return $this;
    }

    /**
     * Get auftragBannerAnzahl
     *
     * @return integer 
     */
    public function getAuftragBannerAnzahl()
    {
        return $this->auftragBannerAnzahl;
    }

    /**
     * Set auftragIdentifikation
     *
     * @param string $auftragIdentifikation
     * @return NlAuftraege
     */
    public function setAuftragIdentifikation($auftragIdentifikation)
    {
        $this->auftragIdentifikation = $auftragIdentifikation;

        return $this;
    }

    /**
     * Get auftragIdentifikation
     *
     * @return string 
     */
    public function getAuftragIdentifikation()
    {
        return $this->auftragIdentifikation;
    }

    /**
     * Get auftragId
     *
     * @return integer 
     */
    public function getAuftragId()
    {
        return $this->auftragId;
    }
}
