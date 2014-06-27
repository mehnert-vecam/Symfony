<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopProdukteModeratoren
 *
 * @ORM\Table(name="shop_produkte_moderatoren", indexes={@ORM\Index(name="fk_shop_produkte_moderatoren_shop_produkte1", columns={"produkt_id"})})
 * @ORM\Entity
 */
class ShopProdukteModeratoren
{
    /**
     * @var integer
     *
     * @ORM\Column(name="person_id", type="integer", nullable=true)
     */
    private $personId;

    /**
     * @var integer
     *
     * @ORM\Column(name="produkt_id", type="integer", nullable=true)
     */
    private $produktId;

    /**
     * @var integer
     *
     * @ORM\Column(name="produkte_moderator_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
