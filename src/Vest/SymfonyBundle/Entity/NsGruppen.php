<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NsGruppen
 *
 * @ORM\Table(name="ns_gruppen")
 * @ORM\Entity
 */
class NsGruppen
{
    /**
     * @var integer
     *
     * @ORM\Column(name="news_id", type="bigint", nullable=false)
     */
    private $newsId;

    /**
     * @var integer
     *
     * @ORM\Column(name="gruppe_id", type="bigint", nullable=true)
     */
    private $gruppeId;

    /**
     * @var integer
     *
     * @ORM\Column(name="news_gruppe_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $newsGruppeId;



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

    /**
     * Get newsGruppeId
     *
     * @return integer 
     */
    public function getNewsGruppeId()
    {
        return $this->newsGruppeId;
    }
}
