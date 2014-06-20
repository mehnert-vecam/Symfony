<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TestFkT3
 */
class TestFkT3
{
    /**
     * @var string
     */
    private $wert;

    /**
     * @var boolean
     */
    private $pk;


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

    /**
     * Get pk
     *
     * @return boolean 
     */
    public function getPk()
    {
        return $this->pk;
    }
}
