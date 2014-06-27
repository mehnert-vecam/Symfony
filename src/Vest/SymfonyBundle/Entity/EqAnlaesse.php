<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EqAnlaesse
 *
 * @ORM\Table(name="eq_anlaesse")
 * @ORM\Entity
 */
class EqAnlaesse
{
    /**
     * @var string
     *
     * @ORM\Column(name="anlass_objekt", type="string", length=200, nullable=true)
     */
    private $anlassObjekt;

    /**
     * @var integer
     *
     * @ORM\Column(name="anlass_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
