<?php

namespace Vest\SharedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TestFulltext
 */
class TestFulltext
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $wert;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set wert
     *
     * @param string $wert
     * @return TestFulltext
     */
    public function setWert($wert)
    {
        $this->wert = $wert;

        return $this;
    }

    /**
     * Get wert
     *
     * @return string 
     */
    public function getWert()
    {
        return $this->wert;
    }
}
