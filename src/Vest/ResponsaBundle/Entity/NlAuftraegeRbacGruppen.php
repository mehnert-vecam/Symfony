<?php

namespace Vest\ResponsaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NlAuftraegeRbacGruppen
 */
class NlAuftraegeRbacGruppen
{
    /**
     * @var integer
     */
    private $auftragGruppeId;

    /**
     * @var integer
     */
    private $auftragId;

    /**
     * @var integer
     */
    private $gruppeId;


    /**
     * Get auftragGruppeId
     *
     * @return integer 
     */
    public function getAuftragGruppeId()
    {
        return $this->auftragGruppeId;
    }

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
}
