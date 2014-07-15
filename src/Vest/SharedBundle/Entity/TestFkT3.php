<?php

namespace Vest\SharedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TestFkT3
 */
class TestFkT3
{
    /**
     * @var boolean
     */
    private $pk;

    /**
     * @var string
     */
    private $wert;


    /**
     * Get pk
     *
     * @return boolean 
     */
    public function getPk()
    {
        return $this->pk;
    }

    /**
     * Set wert
     *
     * @param string $wert
     * @return TestFkT3
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
