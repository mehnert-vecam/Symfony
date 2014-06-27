<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TestFulltext
 *
 * @ORM\Table(name="test_fulltext", indexes={@ORM\Index(name="WERT", columns={"WERT"})})
 * @ORM\Entity
 */
class TestFulltext
{
    /**
     * @var string
     *
     * @ORM\Column(name="WERT", type="string", length=8000, nullable=false)
     */
    private $wert;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



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

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
