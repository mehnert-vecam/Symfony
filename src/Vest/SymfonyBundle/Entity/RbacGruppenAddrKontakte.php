<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RbacGruppenAddrKontakte
 *
 * @ORM\Table(name="rbac_gruppen_addr_kontakte")
 * @ORM\Entity
 */
class RbacGruppenAddrKontakte
{
    /**
     * @var integer
     *
     * @ORM\Column(name="gruppe_id", type="bigint", nullable=false)
     */
    private $gruppeId;

    /**
     * @var integer
     *
     * @ORM\Column(name="kontakt_id", type="bigint", nullable=false)
     */
    private $kontaktId;

    /**
     * @var integer
     *
     * @ORM\Column(name="kontaktspezifisch_id", type="bigint", nullable=false)
     */
    private $kontaktspezifischId;

    /**
     * @var integer
     *
     * @ORM\Column(name="gruppe_kontakt_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $gruppeKontaktId;



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

    /**
     * Get gruppeKontaktId
     *
     * @return integer 
     */
    public function getGruppeKontaktId()
    {
        return $this->gruppeKontaktId;
    }
}
