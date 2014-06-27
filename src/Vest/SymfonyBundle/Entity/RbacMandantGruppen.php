<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RbacMandantGruppen
 *
 * @ORM\Table(name="rbac_mandant_gruppen")
 * @ORM\Entity
 */
class RbacMandantGruppen
{
    /**
     * @var integer
     *
     * @ORM\Column(name="mandant_gruppe_template", type="integer", nullable=false)
     */
    private $mandantGruppeTemplate;

    /**
     * @var string
     *
     * @ORM\Column(name="mandant_gruppe_name", type="string", length=255, nullable=false)
     */
    private $mandantGruppeName;

    /**
     * @var integer
     *
     * @ORM\Column(name="mandant_gruppe_rollen", type="integer", nullable=false)
     */
    private $mandantGruppeRollen;

    /**
     * @var integer
     *
     * @ORM\Column(name="mandant_gruppe_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mandantGruppeId;



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

    /**
     * Get mandantGruppeId
     *
     * @return integer 
     */
    public function getMandantGruppeId()
    {
        return $this->mandantGruppeId;
    }
}
