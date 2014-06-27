<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LzTypen
 *
 * @ORM\Table(name="lz_typen")
 * @ORM\Entity
 */
class LzTypen
{
    /**
     * @var string
     *
     * @ORM\Column(name="typ_name", type="string", length=45, nullable=true)
     */
    private $typName;

    /**
     * @var integer
     *
     * @ORM\Column(name="typ_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $typId;



    /**
     * Set typName
     *
     * @param string $typName
     * @return LzTypen
     */
    public function setTypName($typName)
    {
        $this->typName = $typName;

        return $this;
    }

    /**
     * Get typName
     *
     * @return string 
     */
    public function getTypName()
    {
        return $this->typName;
    }

    /**
     * Get typId
     *
     * @return integer 
     */
    public function getTypId()
    {
        return $this->typId;
    }
}
