<?php

namespace Vest\ResponsaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TestKontaktePersonen
 */
class TestKontaktePersonen
{
    /**
     * @var boolean
     */
    private $id;

    /**
     * @var \Vest\ResponsaBundle\Entity\TestPersonen
     */
    private $personen;

    /**
     * @var \Vest\ResponsaBundle\Entity\TestKontakt
     */
    private $kontakt;


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
     * Set personen
     *
     * @param \Vest\ResponsaBundle\Entity\TestPersonen $personen
     * @return TestKontaktePersonen
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
     * Set kontakt
     *
     * @param \Vest\ResponsaBundle\Entity\TestKontakt $kontakt
     * @return TestKontaktePersonen
     */
    public function setKontakt(\Vest\ResponsaBundle\Entity\TestKontakt $kontakt = null)
    {
        $this->kontakt = $kontakt;

        return $this;
    }

    /**
     * Get kontakt
     *
     * @return \Vest\ResponsaBundle\Entity\TestKontakt
     */
    public function getKontakt()
    {
        return $this->kontakt;
    }
    /**
     * @var \Vest\ResponsaBundle\Entity\TestKontakt
     */
    private $TestKontakt;

    /**
     * @var \Vest\ResponsaBundle\Entity\TestPersonen
     */
    private $TestPersonen;


    /**
     * Set TestKontakt
     *
     * @param \Vest\ResponsaBundle\Entity\TestKontakt $testKontakt
     * @return TestKontaktePersonen
     */
    public function setTestKontakt(\Vest\ResponsaBundle\Entity\TestKontakt $testKontakt = null)
    {
        $this->TestKontakt = $testKontakt;

        return $this;
    }

    /**
     * Get TestKontakt
     *
     * @return \Vest\ResponsaBundle\Entity\TestKontakt
     */
    public function getTestKontakt()
    {
        return $this->TestKontakt;
    }

    /**
     * Set TestPersonen
     *
     * @param \Vest\ResponsaBundle\Entity\TestPersonen $testPersonen
     * @return TestKontaktePersonen
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
     * @var \Vest\ResponsaBundle\Entity\TestKontakt
     */
    private $kontakt1;


    /**
     * Set kontakt1
     *
     * @param \Vest\ResponsaBundle\Entity\TestKontakt $kontakt1
     * @return TestKontaktePersonen
     */
    public function setKontakt1(\Vest\ResponsaBundle\Entity\TestKontakt $kontakt1 = null)
    {
        $this->kontakt1 = $kontakt1;

        return $this;
    }

    /**
     * Get kontakt1
     *
     * @return \Vest\ResponsaBundle\Entity\TestKontakt
     */
    public function getKontakt1()
    {
        return $this->kontakt1;
    }
    /**
     * @var \Vest\ResponsaBundle\Entity\TestKontakt
     */
    private $testkontakt;

    /**
     * @var \Vest\ResponsaBundle\Entity\TestPersonen
     */
    private $testpersonen;


//    DOPPELT DURCH MERGEN??!!
//    /**
//     * Set testkontakt
//     *
//     * @param \Vest\ResponsaBundle\Entity\TestKontakt $testkontakt
//     * @return TestKontaktePersonen
//     */
//    public function setTestkontakt(\Vest\ResponsaBundle\Entity\TestKontakt $testkontakt = null)
//    {
//        $this->testkontakt = $testkontakt;
//
//        return $this;
//    }
//
//    /**
//     * Get testkontakt
//     *
//     * @return \Vest\ResponsaBundle\Entity\TestKontakt
//     */
//    public function getTestkontakt()
//    {
//        return $this->testkontakt;
//    }
//
//    /**
//     * Set testpersonen
//     *
//     * @param \Vest\ResponsaBundle\Entity\TestPersonen $testpersonen
//     * @return TestKontaktePersonen
//     */
//    public function setTestpersonen(\Vest\ResponsaBundle\Entity\TestPersonen $testpersonen = null)
//    {
//        $this->testpersonen = $testpersonen;
//
//        return $this;
//    }
//
//    /**
//     * Get testpersonen
//     *
//     * @return \Vest\ResponsaBundle\Entity\TestPersonen
//     */
//    public function getTestpersonen()
//    {
//        return $this->testpersonen;
//    }
}
