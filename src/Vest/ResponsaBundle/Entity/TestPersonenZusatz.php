<?php

namespace Vest\ResponsaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TestPersonenZusatz
 */
class TestPersonenZusatz
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \Vest\ResponsaBundle\Entity\TestPersonen
     */
    private $personen;


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
     * Set name
     *
     * @param string $name
     * @return TestPersonenZusatz
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set personen
     *
     * @param \Vest\ResponsaBundle\Entity\TestPersonen $personen
     * @return TestPersonenZusatz
     */
    public function setPersonen(\Vest\ResponsaBundle\Entity\TestPersonen $personen = null)
    {
        $this->personen = $personen;

        return $this;
    }

    /**
     * Get personen
     *
     * @return \Vest\ResponsaBundle\Entity\TestPersonen 
     */
    public function getPersonen()
    {
        return $this->personen;
    }
    /**
     * @var \Vest\ResponsaBundle\Entity\TestPersonen
     */
    private $TestPersonen;


    /**
     * Set TestPersonen
     *
     * @param \Vest\ResponsaBundle\Entity\TestPersonen $testPersonen
     * @return TestPersonenZusatz
     */
    public function setTestPersonen(\Vest\ResponsaBundle\Entity\TestPersonen $testPersonen = null)
    {
        $this->TestPersonen = $testPersonen;

        return $this;
    }

    /**
     * Get TestPersonen
     *
     * @return \Vest\ResponsaBundle\Entity\TestPersonen 
     */
    public function getTestPersonen()
    {
        return $this->TestPersonen;
    }
    /**
     * @var \Vest\ResponsaBundle\Entity\TestPersonen
     */
    private $testpersonen;


    /**
     * Set testpersonen
     *
     * @param \Vest\ResponsaBundle\Entity\TestPersonen $testpersonen
     * @return TestPersonenZusatz
     */
    public function setTestpersonen(\Vest\ResponsaBundle\Entity\TestPersonen $testpersonen = null)
    {
        $this->testpersonen = $testpersonen;

        return $this;
    }

    /**
     * Get testpersonen
     *
     * @return \Vest\ResponsaBundle\Entity\TestPersonen 
     */
    public function getTestpersonen()
    {
        return $this->testpersonen;
    }
}
