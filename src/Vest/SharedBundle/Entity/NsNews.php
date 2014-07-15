<?php

namespace Vest\SharedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NsNews
 */
class NsNews
{
    /**
     * @var integer
     */
    private $newsId;

    /**
     * @var string
     */
    private $newsName;

    /**
     * @var string
     */
    private $newsDatum;

    /**
     * @var string
     */
    private $newsTeaser;

    /**
     * @var string
     */
    private $newsUrl;

    /**
     * @var string
     */
    private $kontaktId;


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
     * Set newsName
     *
     * @param string $newsName
     * @return NsNews
     */
    public function setNewsName($newsName)
    {
        $this->newsName = $newsName;

        return $this;
    }

    /**
     * Get newsName
     *
     * @return string 
     */
    public function getNewsName()
    {
        return $this->newsName;
    }

    /**
     * Set newsDatum
     *
     * @param string $newsDatum
     * @return NsNews
     */
    public function setNewsDatum($newsDatum)
    {
        $this->newsDatum = $newsDatum;

        return $this;
    }

    /**
     * Get newsDatum
     *
     * @return string 
     */
    public function getNewsDatum()
    {
        return $this->newsDatum;
    }

    /**
     * Set newsTeaser
     *
     * @param string $newsTeaser
     * @return NsNews
     */
    public function setNewsTeaser($newsTeaser)
    {
        $this->newsTeaser = $newsTeaser;

        return $this;
    }

    /**
     * Get newsTeaser
     *
     * @return string 
     */
    public function getNewsTeaser()
    {
        return $this->newsTeaser;
    }

    /**
     * Set newsUrl
     *
     * @param string $newsUrl
     * @return NsNews
     */
    public function setNewsUrl($newsUrl)
    {
        $this->newsUrl = $newsUrl;

        return $this;
    }

    /**
     * Get newsUrl
     *
     * @return string 
     */
    public function getNewsUrl()
    {
        return $this->newsUrl;
    }

    /**
     * Set kontaktId
     *
     * @param string $kontaktId
     * @return NsNews
     */
    public function setKontaktId($kontaktId)
    {
        $this->kontaktId = $kontaktId;

        return $this;
    }

    /**
     * Get kontaktId
     *
     * @return string 
     */
    public function getKontaktId()
    {
        return $this->kontaktId;
    }
}
