<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SaleRabattVaVeranstaltungen
 */
class SaleRabattVaVeranstaltungen
{
    /**
     * @var integer
     */
    private $rabattId;

    /**
     * @var string
     */
    private $veranstaltungId;

    /**
     * @var integer
     */
    private $rabattVeranstaltungId;


    /**
     * Set rabattId
     *
     * @param integer $rabattId
     * @return SaleRabattVaVeranstaltungen
     */
    public function setRabattId($rabattId)
    {
        $this->rabattId = $rabattId;

        return $this;
    }

    /**
     * Get rabattId
     *
     * @return integer 
     */
    public function getRabattId()
    {
        return $this->rabattId;
    }

    /**
     * Set veranstaltungId
     *
     * @param string $veranstaltungId
     * @return SaleRabattVaVeranstaltungen
     */
    public function setVeranstaltungId($veranstaltungId)
    {
        $this->veranstaltungId = $veranstaltungId;

        return $this;
    }

    /**
     * Get veranstaltungId
     *
     * @return string 
     */
    public function getVeranstaltungId()
    {
        return $this->veranstaltungId;
    }

    /**
     * Get rabattVeranstaltungId
     *
     * @return integer 
     */
    public function getRabattVeranstaltungId()
    {
        return $this->rabattVeranstaltungId;
    }
}
