<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LzRechte
 *
 * @ORM\Table(name="lz_rechte")
 * @ORM\Entity
 */
class LzRechte
{
    /**
     * @var integer
     *
     * @ORM\Column(name="recht_modul", type="bigint", nullable=false)
     */
    private $rechtModul;

    /**
     * @var integer
     *
     * @ORM\Column(name="recht_id", type="bigint", nullable=true)
     */
    private $rechtId;

    /**
     * @var integer
     *
     * @ORM\Column(name="lz_rechte_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $lzRechteId;



    /**
     * Set rechtModul
     *
     * @param integer $rechtModul
     * @return LzRechte
     */
    public function setRechtModul($rechtModul)
    {
        $this->rechtModul = $rechtModul;

        return $this;
    }

    /**
     * Get rechtModul
     *
     * @return integer 
     */
    public function getRechtModul()
    {
        return $this->rechtModul;
    }

    /**
     * Set rechtId
     *
     * @param integer $rechtId
     * @return LzRechte
     */
    public function setRechtId($rechtId)
    {
        $this->rechtId = $rechtId;

        return $this;
    }

    /**
     * Get rechtId
     *
     * @return integer 
     */
    public function getRechtId()
    {
        return $this->rechtId;
    }

    /**
     * Get lzRechteId
     *
     * @return integer 
     */
    public function getLzRechteId()
    {
        return $this->lzRechteId;
    }
}
