<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TestFkT2
 *
 * @ORM\Table(name="test_fk_t2", indexes={@ORM\Index(name="T1_FK", columns={"T1_FK", "T3_FK"}), @ORM\Index(name="T3_FK", columns={"T3_FK"}), @ORM\Index(name="IDX_D3CD270663EB18C4", columns={"T1_FK"})})
 * @ORM\Entity
 */
class TestFkT2
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="PK", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pk;

    /**
     * @var \Vest\SymfonyBundle\Entity\TestFkT3
     *
     * @ORM\ManyToOne(targetEntity="Vest\SymfonyBundle\Entity\TestFkT3")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="T3_FK", referencedColumnName="PK")
     * })
     */
    private $t3Fk;

    /**
     * @var \Vest\SymfonyBundle\Entity\TestFkT1
     *
     * @ORM\ManyToOne(targetEntity="Vest\SymfonyBundle\Entity\TestFkT1")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="T1_FK", referencedColumnName="PK")
     * })
     */
    private $t1Fk;



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
     * Set t3Fk
     *
     * @param \Vest\SymfonyBundle\Entity\TestFkT3 $t3Fk
     * @return TestFkT2
     */
    public function setT3Fk(\Vest\SymfonyBundle\Entity\TestFkT3 $t3Fk = null)
    {
        $this->t3Fk = $t3Fk;

        return $this;
    }

    /**
     * Get t3Fk
     *
     * @return \Vest\SymfonyBundle\Entity\TestFkT3 
     */
    public function getT3Fk()
    {
        return $this->t3Fk;
    }

    /**
     * Set t1Fk
     *
     * @param \Vest\SymfonyBundle\Entity\TestFkT1 $t1Fk
     * @return TestFkT2
     */
    public function setT1Fk(\Vest\SymfonyBundle\Entity\TestFkT1 $t1Fk = null)
    {
        $this->t1Fk = $t1Fk;

        return $this;
    }

    /**
     * Get t1Fk
     *
     * @return \Vest\SymfonyBundle\Entity\TestFkT1 
     */
    public function getT1Fk()
    {
        return $this->t1Fk;
    }
}
