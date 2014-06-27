<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SaleRabattVaVeranstaltungen
 *
 * @ORM\Table(name="sale_rabatt_va_veranstaltungen")
 * @ORM\Entity
 */
class SaleRabattVaVeranstaltungen
{
    /**
     * @var integer
     *
     * @ORM\Column(name="rabatt_id", type="integer", nullable=true)
     */
    private $rabattId;

    /**
     * @var string
     *
     * @ORM\Column(name="veranstaltung_id", type="string", length=45, nullable=true)
     */
    private $veranstaltungId;

    /**
     * @var integer
     *
     * @ORM\Column(name="rabatt_veranstaltung_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
