<?php

namespace Vest\ResponsaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LzVergabe
 */
class LzVergabe
{
    /**
     * @var integer
     */
    private $lizenzId;

    /**
     * @var integer
     */
    private $kontaktId;

    /**
     * @var string
     */
    private $vergabePublicKey;

    /**
     * @var string
     */
    private $vergabePrivateKey;

    /**
     * @var \DateTime
     */
    private $vergabeStart;

    /**
     * @var \DateTime
     */
    private $vergabeEnde;

    /**
     * @var integer
     */
    private $vergabeId;


    /**
     * Set lizenzId
     *
     * @param integer $lizenzId
     * @return LzVergabe
     */
    public function setLizenzId($lizenzId)
    {
        $this->lizenzId = $lizenzId;

        return $this;
    }

    /**
     * Get lizenzId
     *
     * @return integer 
     */
    public function getLizenzId()
    {
        return $this->lizenzId;
    }

    /**
     * Set kontaktId
     *
     * @param integer $kontaktId
     * @return LzVergabe
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
     * Set vergabePublicKey
     *
     * @param string $vergabePublicKey
     * @return LzVergabe
     */
    public function setVergabePublicKey($vergabePublicKey)
    {
        $this->vergabePublicKey = $vergabePublicKey;

        return $this;
    }

    /**
     * Get vergabePublicKey
     *
     * @return string 
     */
    public function getVergabePublicKey()
    {
        return $this->vergabePublicKey;
    }

    /**
     * Set vergabePrivateKey
     *
     * @param string $vergabePrivateKey
     * @return LzVergabe
     */
    public function setVergabePrivateKey($vergabePrivateKey)
    {
        $this->vergabePrivateKey = $vergabePrivateKey;

        return $this;
    }

    /**
     * Get vergabePrivateKey
     *
     * @return string 
     */
    public function getVergabePrivateKey()
    {
        return $this->vergabePrivateKey;
    }

    /**
     * Set vergabeStart
     *
     * @param \DateTime $vergabeStart
     * @return LzVergabe
     */
    public function setVergabeStart($vergabeStart)
    {
        $this->vergabeStart = $vergabeStart;

        return $this;
    }

    /**
     * Get vergabeStart
     *
     * @return \DateTime 
     */
    public function getVergabeStart()
    {
        return $this->vergabeStart;
    }

    /**
     * Set vergabeEnde
     *
     * @param \DateTime $vergabeEnde
     * @return LzVergabe
     */
    public function setVergabeEnde($vergabeEnde)
    {
        $this->vergabeEnde = $vergabeEnde;

        return $this;
    }

    /**
     * Get vergabeEnde
     *
     * @return \DateTime 
     */
    public function getVergabeEnde()
    {
        return $this->vergabeEnde;
    }

    /**
     * Get vergabeId
     *
     * @return integer 
     */
    public function getVergabeId()
    {
        return $this->vergabeId;
    }
}
