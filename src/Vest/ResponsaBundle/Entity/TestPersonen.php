<?php

namespace Vest\ResponsaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TestPersonen
 */
class TestPersonen
{
    /**
     * @var boolean
     */
    private $id;

    /**
     * @var string
     */
    private $wert;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $testKontaktePersonen;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $testPersonenZusatz;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->testKontaktePersonen = new \Doctrine\Common\Collections\ArrayCollection();
        $this->testPersonenZusatz = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return boolean 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set wert
     *
     * @param string $wert
     * @return TestPersonen
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
     * Add testKontaktePersonen
     *
     * @param \Vest\ResponsaBundle\Entity\TestKontaktePersonen $testKontaktePersonen
     * @return TestPersonen
     */
    public function addTestKontaktePersonen(\Vest\ResponsaBundle\Entity\TestKontaktePersonen $testKontaktePersonen)
    {
        $this->testKontaktePersonen[] = $testKontaktePersonen;

        return $this;
    }

    /**
     * Remove testKontaktePersonen
     *
     * @param \Vest\ResponsaBundle\Entity\TestKontaktePersonen $testKontaktePersonen
     */
    public function removeTestKontaktePersonen(\Vest\ResponsaBundle\Entity\TestKontaktePersonen $testKontaktePersonen)
    {
        $this->testKontaktePersonen->removeElement($testKontaktePersonen);
    }

    /**
     * Get testKontaktePersonen
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTestKontaktePersonen()
    {
        return $this->testKontaktePersonen;
    }

    /**
     * Add testPersonenZusatz
     *
     * @param \Vest\ResponsaBundle\Entity\TestPersonenZusatz $testPersonenZusatz
     * @return TestPersonen
     */
    public function addTestPersonenZusatz(\Vest\ResponsaBundle\Entity\TestPersonenZusatz $testPersonenZusatz)
    {
        $this->testPersonenZusatz[] = $testPersonenZusatz;

        return $this;
    }

    /**
     * Remove testPersonenZusatz
     *
     * @param \Vest\ResponsaBundle\Entity\TestPersonenZusatz $testPersonenZusatz
     */
    public function removeTestPersonenZusatz(\Vest\ResponsaBundle\Entity\TestPersonenZusatz $testPersonenZusatz)
    {
        $this->testPersonenZusatz->removeElement($testPersonenZusatz);
    }

    /**
     * Get testPersonenZusatz
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTestPersonenZusatz()
    {
        return $this->testPersonenZusatz;
    }

    /**
     * Set testPersonenZusatz
     *
     * @param \Vest\ResponsaBundle\Entity\TestPersonenZusatz $testPersonenZusatz
     * @return TestPersonen
     */
    public function setTestPersonenZusatz(\Vest\ResponsaBundle\Entity\TestPersonenZusatz $testPersonenZusatz = null)
    {
        $this->testPersonenZusatz = $testPersonenZusatz;

        return $this;
    }
}
