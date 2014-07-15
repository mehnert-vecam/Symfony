<?php

namespace Vest\SharedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RvWebinarlizenzen
 */
class RvWebinarlizenzen
{
    /**
     * @var integer
     */
    private $webinarlizenzId;

    /**
     * @var string
     */
    private $webinarlizenzName;


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
     * Set webinarlizenzName
     *
     * @param string $webinarlizenzName
     * @return RvWebinarlizenzen
     */
    public function setWebinarlizenzName($webinarlizenzName)
    {
        $this->webinarlizenzName = $webinarlizenzName;

        return $this;
    }

    /**
     * Get webinarlizenzName
     *
     * @return string 
     */
    public function getWebinarlizenzName()
    {
        return $this->webinarlizenzName;
    }
}
