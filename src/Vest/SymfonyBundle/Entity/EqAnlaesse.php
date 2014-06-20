<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EqAnlaesse
 */
class EqAnlaesse
{
    /**
     * @var string
     */
    private $anlassObjekt;

    /**
     * @var integer
     */
    private $anlassId;


    /**
     * Set anlassObjekt
     *
     * @param string $anlassObjekt
     * @return EqAnlaesse
     */
    public function setAnlassObjekt($anlassObjekt)
    {
        $this->anlassObjekt = $anlassObjekt;

        return $this;
    }

    /**
     * Get anlassObjekt
     *
     * @return string 
     */
    public function getAnlassObjekt()
    {
        return $this->anlassObjekt;
    }

    /**
     * Get anlassId
     *
     * @return integer 
     */
    public function getAnlassId()
    {
        return $this->anlassId;
    }
}
