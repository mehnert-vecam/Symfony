<?php

namespace Vest\ResponsaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RbacGruppenAddrKontakte
 */
class RbacGruppenAddrKontakte
{
    /**
     * @var integer
     */
    private $gruppeKontaktId;

    /**
     * @var integer
     */
    private $gruppeId;

    /**
     * @var integer
     */
    private $kontaktId;

    /**
     * @var integer
     */
    private $kontaktspezifischId;


    /**
     * Get gruppeKontaktId
     *
     * @return integer 
     */
    public function getGruppeKontaktId()
    {
        return $this->gruppeKontaktId;
    }

    /**
     * Set gruppeId
     *
     * @param integer $gruppeId
     * @return RbacGruppenAddrKontakte
     */
    public function setGruppeId($gruppeId)
    {
        $this->gruppeId = $gruppeId;

        return $this;
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

    /**
     * Set kontaktId
     *
     * @param integer $kontaktId
     * @return RbacGruppenAddrKontakte
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
     * Set kontaktspezifischId
     *
     * @param integer $kontaktspezifischId
     * @return RbacGruppenAddrKontakte
     */
    public function setKontaktspezifischId($kontaktspezifischId)
    {
        $this->kontaktspezifischId = $kontaktspezifischId;

        return $this;
    }

    /**
     * Get kontaktspezifischId
     *
     * @return integer 
     */
    public function getKontaktspezifischId()
    {
        return $this->kontaktspezifischId;
    }
}
