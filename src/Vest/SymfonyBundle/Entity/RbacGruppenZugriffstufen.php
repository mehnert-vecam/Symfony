<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RbacGruppenZugriffstufen
 *
 * @ORM\Table(name="rbac_gruppen_zugriffstufen")
 * @ORM\Entity
 */
class RbacGruppenZugriffstufen
{
    /**
     * @var string
     *
     * @ORM\Column(name="gruppe_zugriffsstufe_name", type="string", length=255, nullable=false)
     */
    private $gruppeZugriffsstufeName;

    /**
     * @var string
     *
     * @ORM\Column(name="gruppe_zugriffsstufe_beschreibung", type="text", nullable=false)
     */
    private $gruppeZugriffsstufeBeschreibung;

    /**
     * @var integer
     *
     * @ORM\Column(name="gruppe_zugriffsstufe_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $gruppeZugriffsstufeId;



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

    /**
     * Get gruppeZugriffsstufeId
     *
     * @return integer 
     */
    public function getGruppeZugriffsstufeId()
    {
        return $this->gruppeZugriffsstufeId;
    }
}
