<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TestFkT1
 *
 * @ORM\Table(name="test_fk_t1")
 * @ORM\Entity
 */
class TestFkT1
{
    /**
     * @var string
     *
     * @ORM\Column(name="WERT", type="string", length=8000, nullable=false)
     */
    private $wert;

    /**
     * @var string
     *
     * @ORM\Column(name="WERT_001", type="string", length=8000, nullable=false)
     */
    private $wert001;

    /**
     * @var boolean
     *
     * @ORM\Column(name="PK", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pk;



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
