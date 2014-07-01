<?php

namespace Vest\ResponsaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RbacMandantGruppen
 */
class RbacMandantGruppen
{
    /**
     * @var integer
     */
    private $mandantGruppeId;

    /**
     * @var integer
     */
    private $mandantGruppeTemplate;

    /**
     * @var string
     */
    private $mandantGruppeName;

    /**
     * @var integer
     */
    private $mandantGruppeRollen;


    /**
     * Get mandantGruppeId
     *
     * @return integer 
     */
    public function getMandantGruppeId()
    {
        return $this->mandantGruppeId;
    }

    /**
     * Set mandantGruppeTemplate
     *
     * @param integer $mandantGruppeTemplate
     * @return RbacMandantGruppen
     */
    public function setMandantGruppeTemplate($mandantGruppeTemplate)
    {
        $this->mandantGruppeTemplate = $mandantGruppeTemplate;

        return $this;
    }

    /**
     * Get mandantGruppeTemplate
     *
     * @return integer 
     */
    public function getMandantGruppeTemplate()
    {
        return $this->mandantGruppeTemplate;
    }

    /**
     * Set mandantGruppeName
     *
     * @param string $mandantGruppeName
     * @return RbacMandantGruppen
     */
    public function setMandantGruppeName($mandantGruppeName)
    {
        $this->mandantGruppeName = $mandantGruppeName;

        return $this;
    }

    /**
     * Get mandantGruppeName
     *
     * @return string 
     */
    public function getMandantGruppeName()
    {
        return $this->mandantGruppeName;
    }

    /**
     * Set mandantGruppeRollen
     *
     * @param integer $mandantGruppeRollen
     * @return RbacMandantGruppen
     */
    public function setMandantGruppeRollen($mandantGruppeRollen)
    {
        $this->mandantGruppeRollen = $mandantGruppeRollen;

        return $this;
    }

    /**
     * Get mandantGruppeRollen
     *
     * @return integer 
     */
    public function getMandantGruppeRollen()
    {
        return $this->mandantGruppeRollen;
    }
}
