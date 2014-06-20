<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopNummernkreisTypen
 */
class ShopNummernkreisTypen
{
    /**
     * @var string
     */
    private $nummernkreisTypName;

    /**
     * @var string
     */
    private $nummernkreisTypPlatzhalter;

    /**
     * @var integer
     */
    private $nummernkreisTypId;


    /**
     * Set nummernkreisTypName
     *
     * @param string $nummernkreisTypName
     * @return ShopNummernkreisTypen
     */
    public function setNummernkreisTypName($nummernkreisTypName)
    {
        $this->nummernkreisTypName = $nummernkreisTypName;

        return $this;
    }

    /**
     * Get nummernkreisTypName
     *
     * @return string 
     */
    public function getNummernkreisTypName()
    {
        return $this->nummernkreisTypName;
    }

    /**
     * Set nummernkreisTypPlatzhalter
     *
     * @param string $nummernkreisTypPlatzhalter
     * @return ShopNummernkreisTypen
     */
    public function setNummernkreisTypPlatzhalter($nummernkreisTypPlatzhalter)
    {
        $this->nummernkreisTypPlatzhalter = $nummernkreisTypPlatzhalter;

        return $this;
    }

    /**
     * Get nummernkreisTypPlatzhalter
     *
     * @return string 
     */
    public function getNummernkreisTypPlatzhalter()
    {
        return $this->nummernkreisTypPlatzhalter;
    }

    /**
     * Get nummernkreisTypId
     *
     * @return integer 
     */
    public function getNummernkreisTypId()
    {
        return $this->nummernkreisTypId;
    }
}
