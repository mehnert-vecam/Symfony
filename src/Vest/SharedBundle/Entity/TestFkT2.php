<?php

namespace Vest\SharedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TestFkT2
 */
class TestFkT2
{
    /**
     * @var boolean
     */
    private $pk;

    /**
     * @var \Vest\SharedBundle\Entity\TestFkT1
     */
    private $t1Fk;

    /**
     * @var \Vest\SharedBundle\Entity\TestFkT3
     */
    private $t3Fk;


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
     * Set t1Fk
     *
     * @param \Vest\SharedBundle\Entity\TestFkT1 $t1Fk
     * @return TestFkT2
     */
    public function setT1Fk(\Vest\SharedBundle\Entity\TestFkT1 $t1Fk = null)
    {
        $this->t1Fk = $t1Fk;

        return $this;
    }

    /**
     * Get t1Fk
     *
     * @return \Vest\SharedBundle\Entity\TestFkT1 
     */
    public function getT1Fk()
    {
        return $this->t1Fk;
    }

    /**
     * Set t3Fk
     *
     * @param \Vest\SharedBundle\Entity\TestFkT3 $t3Fk
     * @return TestFkT2
     */
    public function setT3Fk(\Vest\SharedBundle\Entity\TestFkT3 $t3Fk = null)
    {
        $this->t3Fk = $t3Fk;

        return $this;
    }

    /**
     * Get t3Fk
     *
     * @return \Vest\SharedBundle\Entity\TestFkT3 
     */
    public function getT3Fk()
    {
        return $this->t3Fk;
    }
}
