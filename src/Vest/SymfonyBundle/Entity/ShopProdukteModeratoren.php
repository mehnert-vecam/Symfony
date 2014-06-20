<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopProdukteModeratoren
 */
class ShopProdukteModeratoren
{
    /**
     * @var integer
     */
    private $personId;

    /**
     * @var integer
     */
    private $produktId;

    /**
     * @var integer
     */
    private $produkteModeratorId;


    /**
     * Set personId
     *
     * @param integer $personId
     * @return ShopProdukteModeratoren
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
     * Set produktId
     *
     * @param integer $produktId
     * @return ShopProdukteModeratoren
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
     * Get produkteModeratorId
     *
     * @return integer 
     */
    public function getProdukteModeratorId()
    {
        return $this->produkteModeratorId;
    }
}
