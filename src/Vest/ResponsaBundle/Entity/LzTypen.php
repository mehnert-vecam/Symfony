<?php

namespace Vest\ResponsaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LzTypen
 */
class LzTypen
{
    /**
     * @var integer
     */
    private $typId;

    /**
     * @var string
     */
    private $typName;


    /**
     * Get typId
     *
     * @return integer 
     */
    public function getTypId()
    {
        return $this->typId;
    }

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
}
