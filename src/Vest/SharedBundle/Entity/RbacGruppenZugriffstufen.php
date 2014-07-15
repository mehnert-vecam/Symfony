<?php

namespace Vest\SharedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RbacGruppenZugriffstufen
 */
class RbacGruppenZugriffstufen
{
    /**
     * @var integer
     */
    private $gruppeZugriffsstufeId;

    /**
     * @var string
     */
    private $gruppeZugriffsstufeName;

    /**
     * @var string
     */
    private $gruppeZugriffsstufeBeschreibung;


    /**
     * Get gruppeZugriffsstufeId
     *
     * @return integer 
     */
    public function getGruppeZugriffsstufeId()
    {
        return $this->gruppeZugriffsstufeId;
    }

    /**
     * Set gruppeZugriffsstufeName
     *
     * @param string $gruppeZugriffsstufeName
     * @return RbacGruppenZugriffstufen
     */
    public function setGruppeZugriffsstufeName($gruppeZugriffsstufeName)
    {
        $this->gruppeZugriffsstufeName = $gruppeZugriffsstufeName;

        return $this;
    }

    /**
     * Get gruppeZugriffsstufeName
     *
     * @return string 
     */
    public function getGruppeZugriffsstufeName()
    {
        return $this->gruppeZugriffsstufeName;
    }

    /**
     * Set gruppeZugriffsstufeBeschreibung
     *
     * @param string $gruppeZugriffsstufeBeschreibung
     * @return RbacGruppenZugriffstufen
     */
    public function setGruppeZugriffsstufeBeschreibung($gruppeZugriffsstufeBeschreibung)
    {
        $this->gruppeZugriffsstufeBeschreibung = $gruppeZugriffsstufeBeschreibung;

        return $this;
    }

    /**
     * Get gruppeZugriffsstufeBeschreibung
     *
     * @return string 
     */
    public function getGruppeZugriffsstufeBeschreibung()
    {
        return $this->gruppeZugriffsstufeBeschreibung;
    }
}
