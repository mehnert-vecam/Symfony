<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VaVeranstaltungenRbacGruppen
 *
 * @ORM\Table(name="va_veranstaltungen_rbac_gruppen")
 * @ORM\Entity
 */
class VaVeranstaltungenRbacGruppen
{
    /**
     * @var string
     *
     * @ORM\Column(name="veranstaltungen_tag", type="string", length=50, nullable=false)
     */
    private $veranstaltungenTag;

    /**
     * @var integer
     *
     * @ORM\Column(name="gruppe_id", type="bigint", nullable=true)
     */
    private $gruppeId;

    /**
     * @var integer
     *
     * @ORM\Column(name="veranstaltung_gruppe_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $veranstaltungGruppeId;



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

    /**
     * Get veranstaltungGruppeId
     *
     * @return integer 
     */
    public function getVeranstaltungGruppeId()
    {
        return $this->veranstaltungGruppeId;
    }
}
