<?php

namespace Vest\ResponsaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TestKontakt
 */
class TestKontakt
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
     * Constructor
     */
    public function __construct()
    {
        $this->testKontaktePersonen = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return TestKontakt
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
     * @return TestKontakt
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $testkontaktepersonen;

//    DOPPELT DURCH MERGEN??!!
//    /**
//     * Add testkontaktepersonen
//     *
//     * @param \Vest\ResponsaBundle\Entity\TestKontaktePersonen $testkontaktepersonen
//     * @return TestKontakt
//     */
//    public function addTestkontaktepersonen(\Vest\ResponsaBundle\Entity\TestKontaktePersonen $testkontaktepersonen)
//    {
//        $this->testkontaktepersonen[] = $testkontaktepersonen;
//
//        return $this;
//    }
//
//    /**
//     * Remove testkontaktepersonen
//     *
//     * @param \Vest\ResponsaBundle\Entity\TestKontaktePersonen $testkontaktepersonen
//     */
//    public function removeTestkontaktepersonen(\Vest\ResponsaBundle\Entity\TestKontaktePersonen $testkontaktepersonen)
//    {
//        $this->testkontaktepersonen->removeElement($testkontaktepersonen);
//    }
//
//    /**
//     * Get testkontaktepersonen
//     *
//     * @return \Doctrine\Common\Collections\Collection
//     */
//    public function getTestkontaktepersonen()
//    {
//        return $this->testkontaktepersonen;
//    }
}
