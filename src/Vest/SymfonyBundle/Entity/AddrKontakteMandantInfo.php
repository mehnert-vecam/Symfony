<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AddrKontakteMandantInfo
 */
class AddrKontakteMandantInfo
{
    /**
     * @var string
     */
    private $kontaktBaOwner;

    /**
     * @var string
     */
    private $kontaktBaBank;

    /**
     * @var string
     */
    private $kontaktBaIban;

    /**
     * @var string
     */
    private $kontaktBaBic;

    /**
     * @var integer
     */
    private $kontaktId;

    /**
     * @var integer
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
