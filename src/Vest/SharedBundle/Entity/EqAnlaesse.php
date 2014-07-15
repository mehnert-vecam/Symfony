<?php

namespace Vest\SharedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EqAnlaesse
 */
class EqAnlaesse
{
    /**
     * @var integer
     */
    private $anlassId;

    /**
     * @var string
     */
    private $anlassObjekt;


    /**
     * Get anlassId
     *
     * @return integer 
     */
    public function getAnlassId()
    {
        return $this->anlassId;
    }

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
}
