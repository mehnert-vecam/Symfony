<?php

namespace Vest\ResponsaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopTermine
 */
class ShopTermine
{
    /**
     * @var integer
     */
    private $terminId;

    /**
     * @var integer
     */
    private $produktId;

    /**
     * @var string
     */
    private $terminStart;

    /**
     * @var integer
     */
    private $personId;

    /**
     * @var integer
     */
    private $raumId;

    /**
     * @var integer
     */
    private $webinarlizenzId;


    /**
     * Get terminId
     *
     * @return integer 
     */
    public function getTerminId()
    {
        return $this->terminId;
    }

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
}
