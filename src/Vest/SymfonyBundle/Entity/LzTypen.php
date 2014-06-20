<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LzTypen
 */
class LzTypen
{
    /**
     * @var string
     */
    private $typName;

    /**
     * @var integer
     */
    private $typId;


    /**
     * Set typName
     *
     * @param string $typName
     * @return LzTypen
     */
    public function setTypName($typName)
    {
        $this->typName = $typName;

        return $this;
    }

    /**
     * Get typName
     *
     * @return string 
     */
    public function getTypName()
    {
        return $this->typName;
    }

    /**
     * Get typId
     *
     * @return integer 
     */
    public function getTypId()
    {
        return $this->typId;
    }
}
