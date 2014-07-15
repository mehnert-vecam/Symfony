<?php

namespace Vest\SharedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TestFkT1
 */
class TestFkT1
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
     * @var string
     */
    private $wert001;


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
     * @return TestFkT1
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

    /**
     * Set wert001
     *
     * @param string $wert001
     * @return TestFkT1
     */
    public function setWert001($wert001)
    {
        $this->wert001 = $wert001;

        return $this;
    }

    /**
     * Get wert001
     *
     * @return string 
     */
    public function getWert001()
    {
        return $this->wert001;
    }
}
