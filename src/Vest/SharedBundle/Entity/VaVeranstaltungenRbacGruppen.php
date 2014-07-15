<?php

namespace Vest\SharedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VaVeranstaltungenRbacGruppen
 */
class VaVeranstaltungenRbacGruppen
{
    /**
     * @var integer
     */
    private $veranstaltungGruppeId;

    /**
     * @var string
     */
    private $veranstaltungenTag;

    /**
     * @var integer
     */
    private $gruppeId;


    /**
     * Get veranstaltungGruppeId
     *
     * @return integer 
     */
    public function getVeranstaltungGruppeId()
    {
        return $this->veranstaltungGruppeId;
    }

    /**
     * Set veranstaltungenTag
     *
     * @param string $veranstaltungenTag
     * @return VaVeranstaltungenRbacGruppen
     */
    public function setVeranstaltungenTag($veranstaltungenTag)
    {
        $this->veranstaltungenTag = $veranstaltungenTag;

        return $this;
    }

    /**
     * Get veranstaltungenTag
     *
     * @return string 
     */
    public function getVeranstaltungenTag()
    {
        return $this->veranstaltungenTag;
    }

    /**
     * Set gruppeId
     *
     * @param integer $gruppeId
     * @return VaVeranstaltungenRbacGruppen
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
