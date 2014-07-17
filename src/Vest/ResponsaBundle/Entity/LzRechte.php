<?php

namespace Vest\ResponsaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LzRechte
 */
class LzRechte
{
    /**
     * @var integer
     */
    private $rechtModul;

    /**
     * @var integer
     */
    private $rechtId;

    /**
     * @var integer
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
