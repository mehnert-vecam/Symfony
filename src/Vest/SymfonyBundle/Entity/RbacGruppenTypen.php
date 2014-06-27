<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RbacGruppenTypen
 *
 * @ORM\Table(name="rbac_gruppen_typen")
 * @ORM\Entity
 */
class RbacGruppenTypen
{
    /**
     * @var string
     *
     * @ORM\Column(name="gruppe_typ_name", type="string", length=255, nullable=false)
     */
    private $gruppeTypName;

    /**
     * @var integer
     *
     * @ORM\Column(name="gruppe_typ_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $gruppeTypId;



    /**
     * Set gruppeTypName
     *
     * @param string $gruppeTypName
     * @return RbacGruppenTypen
     */
    public function setGruppeTypName($gruppeTypName)
    {
        $this->gruppeTypName = $gruppeTypName;

        return $this;
    }

    /**
     * Get gruppeTypName
     *
     * @return string 
     */
    public function getGruppeTypName()
    {
        return $this->gruppeTypName;
    }

    /**
     * Get gruppeTypId
     *
     * @return integer 
     */
    public function getGruppeTypId()
    {
        return $this->gruppeTypId;
    }
}
