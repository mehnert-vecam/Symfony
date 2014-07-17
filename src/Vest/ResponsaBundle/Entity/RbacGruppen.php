<?php

namespace Vest\ResponsaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RbacGruppen
 */
class RbacGruppen
{
    /**
     * @var integer
     */
    private $kontaktId;

    /**
     * @var integer
     */
    private $gruppeTypId;

    /**
     * @var integer
     */
    private $gruppeZugriffsstufeId;

    /**
     * @var string
     */
    private $gruppeName;

    /**
     * @var string
     */
    private $gruppeBeschreibung;

    /**
     * @var integer
     */
    private $gruppeParentId;

    /**
     * @var boolean
     */
    private $gruppeKontaktspezifisch;

    /**
     * @var integer
     */
    private $gruppeLizenzspezifisch;

    /**
     * @var boolean
     */
    private $gruppeEssentiell;

    /**
     * @var boolean
     */
    private $gruppeSchutz;

    /**
     * @var integer
     */
    private $gruppeId;


    /**
     * Set kontaktId
     *
     * @param integer $kontaktId
     * @return RbacGruppen
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
     * Set gruppeTypId
     *
     * @param integer $gruppeTypId
     * @return RbacGruppen
     */
    public function setGruppeTypId($gruppeTypId)
    {
        $this->gruppeTypId = $gruppeTypId;

        return $this;
    }

    /**
     * Get gruppeTypId
     *
     * @return integer 
     */
    public function getGruppeTypId()
    {
        return $this->gruppeTypId;
    }

    /**
     * Set gruppeZugriffsstufeId
     *
     * @param integer $gruppeZugriffsstufeId
     * @return RbacGruppen
     */
    public function setGruppeZugriffsstufeId($gruppeZugriffsstufeId)
    {
        $this->gruppeZugriffsstufeId = $gruppeZugriffsstufeId;

        return $this;
    }

    /**
     * Get gruppeZugriffsstufeId
     *
     * @return integer 
     */
    public function getGruppeZugriffsstufeId()
    {
        return $this->gruppeZugriffsstufeId;
    }

    /**
     * Set gruppeName
     *
     * @param string $gruppeName
     * @return RbacGruppen
     */
    public function setGruppeName($gruppeName)
    {
        $this->gruppeName = $gruppeName;

        return $this;
    }

    /**
     * Get gruppeName
     *
     * @return string 
     */
    public function getGruppeName()
    {
        return $this->gruppeName;
    }

    /**
     * Set gruppeBeschreibung
     *
     * @param string $gruppeBeschreibung
     * @return RbacGruppen
     */
    public function setGruppeBeschreibung($gruppeBeschreibung)
    {
        $this->gruppeBeschreibung = $gruppeBeschreibung;

        return $this;
    }

    /**
     * Get gruppeBeschreibung
     *
     * @return string 
     */
    public function getGruppeBeschreibung()
    {
        return $this->gruppeBeschreibung;
    }

    /**
     * Set gruppeParentId
     *
     * @param integer $gruppeParentId
     * @return RbacGruppen
     */
    public function setGruppeParentId($gruppeParentId)
    {
        $this->gruppeParentId = $gruppeParentId;

        return $this;
    }

    /**
     * Get gruppeParentId
     *
     * @return integer 
     */
    public function getGruppeParentId()
    {
        return $this->gruppeParentId;
    }

    /**
     * Set gruppeKontaktspezifisch
     *
     * @param boolean $gruppeKontaktspezifisch
     * @return RbacGruppen
     */
    public function setGruppeKontaktspezifisch($gruppeKontaktspezifisch)
    {
        $this->gruppeKontaktspezifisch = $gruppeKontaktspezifisch;

        return $this;
    }

    /**
     * Get gruppeKontaktspezifisch
     *
     * @return boolean 
     */
    public function getGruppeKontaktspezifisch()
    {
        return $this->gruppeKontaktspezifisch;
    }

    /**
     * Set gruppeLizenzspezifisch
     *
     * @param integer $gruppeLizenzspezifisch
     * @return RbacGruppen
     */
    public function setGruppeLizenzspezifisch($gruppeLizenzspezifisch)
    {
        $this->gruppeLizenzspezifisch = $gruppeLizenzspezifisch;

        return $this;
    }

    /**
     * Get gruppeLizenzspezifisch
     *
     * @return integer 
     */
    public function getGruppeLizenzspezifisch()
    {
        return $this->gruppeLizenzspezifisch;
    }

    /**
     * Set gruppeEssentiell
     *
     * @param boolean $gruppeEssentiell
     * @return RbacGruppen
     */
    public function setGruppeEssentiell($gruppeEssentiell)
    {
        $this->gruppeEssentiell = $gruppeEssentiell;

        return $this;
    }

    /**
     * Get gruppeEssentiell
     *
     * @return boolean 
     */
    public function getGruppeEssentiell()
    {
        return $this->gruppeEssentiell;
    }

    /**
     * Set gruppeSchutz
     *
     * @param boolean $gruppeSchutz
     * @return RbacGruppen
     */
    public function setGruppeSchutz($gruppeSchutz)
    {
        $this->gruppeSchutz = $gruppeSchutz;

        return $this;
    }

    /**
     * Get gruppeSchutz
     *
     * @return boolean 
     */
    public function getGruppeSchutz()
    {
        return $this->gruppeSchutz;
    }

    /**
     * Get gruppeId
     *
     * @return integer 
     */
    public function getGruppeId()
    {
        return $this->gruppeId;
    }
}
