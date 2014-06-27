<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NlAuftraegeRbacGruppen
 *
 * @ORM\Table(name="nl_auftraege_rbac_gruppen")
 * @ORM\Entity
 */
class NlAuftraegeRbacGruppen
{
    /**
     * @var integer
     *
     * @ORM\Column(name="auftrag_id", type="bigint", nullable=false)
     */
    private $auftragId;

    /**
     * @var integer
     *
     * @ORM\Column(name="gruppe_id", type="bigint", nullable=true)
     */
    private $gruppeId;

    /**
     * @var integer
     *
     * @ORM\Column(name="auftrag_gruppe_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $auftragGruppeId;



    /**
     * Set auftragId
     *
     * @param integer $auftragId
     * @return NlAuftraegeRbacGruppen
     */
    public function setAuftragId($auftragId)
    {
        $this->auftragId = $auftragId;

        return $this;
    }

    /**
     * Get auftragId
     *
     * @return integer 
     */
    public function getAuftragId()
    {
        return $this->auftragId;
    }

    /**
     * Set gruppeId
     *
     * @param integer $gruppeId
     * @return NlAuftraegeRbacGruppen
     */
    public function setGruppeId($gruppeId)
    {
        $this->gruppeId = $gruppeId;

        return $this;
    }

    /**
     * Get gruppeId
     *
     * @return integer 
     */
    public function getGruppeId()
    {
        return $this->gruppeId;
    }

    /**
     * Get auftragGruppeId
     *
     * @return integer 
     */
    public function getAuftragGruppeId()
    {
        return $this->auftragGruppeId;
    }
}
