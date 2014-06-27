<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopTermine
 *
 * @ORM\Table(name="shop_termine", indexes={@ORM\Index(name="fk_shop_termine_shop_produkte1", columns={"produkt_id"})})
 * @ORM\Entity
 */
class ShopTermine
{
    /**
     * @var integer
     *
     * @ORM\Column(name="produkt_id", type="integer", nullable=true)
     */
    private $produktId;

    /**
     * @var string
     *
     * @ORM\Column(name="termin_start", type="string", length=45, nullable=true)
     */
    private $terminStart;

    /**
     * @var integer
     *
     * @ORM\Column(name="person_id", type="integer", nullable=true)
     */
    private $personId;

    /**
     * @var integer
     *
     * @ORM\Column(name="raum_id", type="integer", nullable=true)
     */
    private $raumId;

    /**
     * @var integer
     *
     * @ORM\Column(name="webinarlizenz_id", type="integer", nullable=true)
     */
    private $webinarlizenzId;

    /**
     * @var integer
     *
     * @ORM\Column(name="termin_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $terminId;



    /**
     * Set produktId
     *
     * @param integer $produktId
     * @return ShopTermine
     */
    public function setProduktId($produktId)
    {
        $this->produktId = $produktId;

        return $this;
    }

    /**
     * Get produktId
     *
     * @return integer 
     */
    public function getProduktId()
    {
        return $this->produktId;
    }

    /**
     * Set terminStart
     *
     * @param string $terminStart
     * @return ShopTermine
     */
    public function setTerminStart($terminStart)
    {
        $this->terminStart = $terminStart;

        return $this;
    }

    /**
     * Get terminStart
     *
     * @return string 
     */
    public function getTerminStart()
    {
        return $this->terminStart;
    }

    /**
     * Set personId
     *
     * @param integer $personId
     * @return ShopTermine
     */
    public function setPersonId($personId)
    {
        $this->personId = $personId;

        return $this;
    }

    /**
     * Get personId
     *
     * @return integer 
     */
    public function getPersonId()
    {
        return $this->personId;
    }

    /**
     * Set raumId
     *
     * @param integer $raumId
     * @return ShopTermine
     */
    public function setRaumId($raumId)
    {
        $this->raumId = $raumId;

        return $this;
    }

    /**
     * Get raumId
     *
     * @return integer 
     */
    public function getRaumId()
    {
        return $this->raumId;
    }

    /**
     * Set webinarlizenzId
     *
     * @param integer $webinarlizenzId
     * @return ShopTermine
     */
    public function setWebinarlizenzId($webinarlizenzId)
    {
        $this->webinarlizenzId = $webinarlizenzId;

        return $this;
    }

    /**
     * Get webinarlizenzId
     *
     * @return integer 
     */
    public function getWebinarlizenzId()
    {
        return $this->webinarlizenzId;
    }

    /**
     * Get terminId
     *
     * @return integer 
     */
    public function getTerminId()
    {
        return $this->terminId;
    }
}
