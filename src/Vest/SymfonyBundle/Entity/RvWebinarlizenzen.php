<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RvWebinarlizenzen
 *
 * @ORM\Table(name="rv_webinarlizenzen")
 * @ORM\Entity
 */
class RvWebinarlizenzen
{
    /**
     * @var string
     *
     * @ORM\Column(name="webinarlizenz_name", type="string", length=45, nullable=true)
     */
    private $webinarlizenzName;

    /**
     * @var integer
     *
     * @ORM\Column(name="webinarlizenz_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
