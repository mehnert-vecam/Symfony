<?php

namespace Vest\SharedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NsGruppen
 */
class NsGruppen
{
    /**
     * @var integer
     */
    private $newsGruppeId;

    /**
     * @var integer
     */
    private $newsId;

    /**
     * @var integer
     */
    private $gruppeId;


    /**
     * Get newsGruppeId
     *
     * @return integer 
     */
    public function getNewsGruppeId()
    {
        return $this->newsGruppeId;
    }

    /**
     * Set newsId
     *
     * @param integer $newsId
     * @return NsGruppen
     */
    public function setNewsId($newsId)
    {
        $this->newsId = $newsId;

        return $this;
    }

    /**
     * Get newsId
     *
     * @return integer 
     */
    public function getNewsId()
    {
        return $this->newsId;
    }

    /**
     * Set gruppeId
     *
     * @param integer $gruppeId
     * @return NsGruppen
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
