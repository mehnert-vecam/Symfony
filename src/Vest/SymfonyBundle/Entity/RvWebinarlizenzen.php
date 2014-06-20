<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RvWebinarlizenzen
 */
class RvWebinarlizenzen
{
    /**
     * @var string
     */
    private $webinarlizenzName;

    /**
     * @var integer
     */
    private $webinarlizenzId;


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
