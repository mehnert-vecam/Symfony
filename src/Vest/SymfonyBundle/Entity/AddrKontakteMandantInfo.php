<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AddrKontakteMandantInfo
 *
 * @ORM\Table(name="addr_kontakte_mandant_info")
 * @ORM\Entity
 */
class AddrKontakteMandantInfo
{
    /**
     * @var string
     *
     * @ORM\Column(name="kontakt_ba_owner", type="string", length=255, nullable=false)
     */
    private $kontaktBaOwner;

    /**
     * @var string
     *
     * @ORM\Column(name="kontakt_ba_bank", type="string", length=255, nullable=false)
     */
    private $kontaktBaBank;

    /**
     * @var string
     *
     * @ORM\Column(name="kontakt_ba_iban", type="string", length=255, nullable=false)
     */
    private $kontaktBaIban;

    /**
     * @var string
     *
     * @ORM\Column(name="kontakt_ba_bic", type="string", length=255, nullable=false)
     */
    private $kontaktBaBic;

    /**
     * @var integer
     *
     * @ORM\Column(name="kontakt_id", type="bigint", nullable=false)
     */
    private $kontaktId;

    /**
     * @var integer
     *
     * @ORM\Column(name="kontakt_info_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $kontaktInfoId;



    /**
     * Set kontaktBaOwner
     *
     * @param string $kontaktBaOwner
     * @return AddrKontakteMandantInfo
     */
    public function setKontaktBaOwner($kontaktBaOwner)
    {
        $this->kontaktBaOwner = $kontaktBaOwner;

        return $this;
    }

    /**
     * Get kontaktBaOwner
     *
     * @return string 
     */
    public function getKontaktBaOwner()
    {
        return $this->kontaktBaOwner;
    }

    /**
     * Set kontaktBaBank
     *
     * @param string $kontaktBaBank
     * @return AddrKontakteMandantInfo
     */
    public function setKontaktBaBank($kontaktBaBank)
    {
        $this->kontaktBaBank = $kontaktBaBank;

        return $this;
    }

    /**
     * Get kontaktBaBank
     *
     * @return string 
     */
    public function getKontaktBaBank()
    {
        return $this->kontaktBaBank;
    }

    /**
     * Set kontaktBaIban
     *
     * @param string $kontaktBaIban
     * @return AddrKontakteMandantInfo
     */
    public function setKontaktBaIban($kontaktBaIban)
    {
        $this->kontaktBaIban = $kontaktBaIban;

        return $this;
    }

    /**
     * Get kontaktBaIban
     *
     * @return string 
     */
    public function getKontaktBaIban()
    {
        return $this->kontaktBaIban;
    }

    /**
     * Set kontaktBaBic
     *
     * @param string $kontaktBaBic
     * @return AddrKontakteMandantInfo
     */
    public function setKontaktBaBic($kontaktBaBic)
    {
        $this->kontaktBaBic = $kontaktBaBic;

        return $this;
    }

    /**
     * Get kontaktBaBic
     *
     * @return string 
     */
    public function getKontaktBaBic()
    {
        return $this->kontaktBaBic;
    }

    /**
     * Set kontaktId
     *
     * @param integer $kontaktId
     * @return AddrKontakteMandantInfo
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
     * Get kontaktInfoId
     *
     * @return integer 
     */
    public function getKontaktInfoId()
    {
        return $this->kontaktInfoId;
    }
}
