<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopNummernkreisTypen
 *
 * @ORM\Table(name="shop_nummernkreis_typen")
 * @ORM\Entity
 */
class ShopNummernkreisTypen
{
    /**
     * @var string
     *
     * @ORM\Column(name="nummernkreis_typ_name", type="string", length=255, nullable=false)
     */
    private $nummernkreisTypName;

    /**
     * @var string
     *
     * @ORM\Column(name="nummernkreis_typ_platzhalter", type="string", length=25, nullable=false)
     */
    private $nummernkreisTypPlatzhalter;

    /**
     * @var integer
     *
     * @ORM\Column(name="nummernkreis_typ_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nummernkreisTypId;



    /**
     * Set nummernkreisTypName
     *
     * @param string $nummernkreisTypName
     * @return ShopNummernkreisTypen
     */
    public function setNummernkreisTypName($nummernkreisTypName)
    {
        $this->nummernkreisTypName = $nummernkreisTypName;

        return $this;
    }

    /**
     * Get nummernkreisTypName
     *
     * @return string 
     */
    public function getNummernkreisTypName()
    {
        return $this->nummernkreisTypName;
    }

    /**
     * Set nummernkreisTypPlatzhalter
     *
     * @param string $nummernkreisTypPlatzhalter
     * @return ShopNummernkreisTypen
     */
    public function setNummernkreisTypPlatzhalter($nummernkreisTypPlatzhalter)
    {
        $this->nummernkreisTypPlatzhalter = $nummernkreisTypPlatzhalter;

        return $this;
    }

    /**
     * Get nummernkreisTypPlatzhalter
     *
     * @return string 
     */
    public function getNummernkreisTypPlatzhalter()
    {
        return $this->nummernkreisTypPlatzhalter;
    }

    /**
     * Get nummernkreisTypId
     *
     * @return integer 
     */
    public function getNummernkreisTypId()
    {
        return $this->nummernkreisTypId;
    }
}
