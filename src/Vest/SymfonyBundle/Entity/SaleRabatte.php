<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SaleRabatte
 *
 * @ORM\Table(name="sale_rabatte")
 * @ORM\Entity
 */
class SaleRabatte
{
    /**
     * @var string
     *
     * @ORM\Column(name="rabatt_name", type="text", nullable=true)
     */
    private $rabattName;

    /**
     * @var string
     *
     * @ORM\Column(name="rabatt_beschreibung", type="text", nullable=true)
     */
    private $rabattBeschreibung;

    /**
     * @var string
     *
     * @ORM\Column(name="kontakt_id", type="string", length=45, nullable=true)
     */
    private $kontaktId;

    /**
     * @var string
     *
     * @ORM\Column(name="rabatttyp_id", type="string", length=45, nullable=true)
     */
    private $rabatttypId;

    /**
     * @var integer
     *
     * @ORM\Column(name="rabatt_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $rabattId;



    /**
     * Set rabattName
     *
     * @param string $rabattName
     * @return SaleRabatte
     */
    public function setRabattName($rabattName)
    {
        $this->rabattName = $rabattName;

        return $this;
    }

    /**
     * Get rabattName
     *
     * @return string 
     */
    public function getRabattName()
    {
        return $this->rabattName;
    }

    /**
     * Set rabattBeschreibung
     *
     * @param string $rabattBeschreibung
     * @return SaleRabatte
     */
    public function setRabattBeschreibung($rabattBeschreibung)
    {
        $this->rabattBeschreibung = $rabattBeschreibung;

        return $this;
    }

    /**
     * Get rabattBeschreibung
     *
     * @return string 
     */
    public function getRabattBeschreibung()
    {
        return $this->rabattBeschreibung;
    }

    /**
     * Set kontaktId
     *
     * @param string $kontaktId
     * @return SaleRabatte
     */
    public function setKontaktId($kontaktId)
    {
        $this->kontaktId = $kontaktId;

        return $this;
    }

    /**
     * Get kontaktId
     *
     * @return string 
     */
    public function getKontaktId()
    {
        return $this->kontaktId;
    }

    /**
     * Set rabatttypId
     *
     * @param string $rabatttypId
     * @return SaleRabatte
     */
    public function setRabatttypId($rabatttypId)
    {
        $this->rabatttypId = $rabatttypId;

        return $this;
    }

    /**
     * Get rabatttypId
     *
     * @return string 
     */
    public function getRabatttypId()
    {
        return $this->rabatttypId;
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
}
