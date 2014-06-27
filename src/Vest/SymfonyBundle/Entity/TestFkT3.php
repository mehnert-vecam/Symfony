<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TestFkT3
 *
 * @ORM\Table(name="test_fk_t3")
 * @ORM\Entity
 */
class TestFkT3
{
    /**
     * @var string
     *
     * @ORM\Column(name="WERT", type="string", length=8000, nullable=false)
     */
    private $wert;

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
