<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NsNews
 *
 * @ORM\Table(name="ns_news")
 * @ORM\Entity
 */
class NsNews
{
    /**
     * @var string
     *
     * @ORM\Column(name="news_name", type="string", length=255, nullable=true)
     */
    private $newsName;

    /**
     * @var string
     *
     * @ORM\Column(name="news_datum", type="string", length=45, nullable=true)
     */
    private $newsDatum;

    /**
     * @var string
     *
     * @ORM\Column(name="news_teaser", type="text", nullable=true)
     */
    private $newsTeaser;

    /**
     * @var string
     *
     * @ORM\Column(name="news_url", type="string", length=255, nullable=true)
     */
    private $newsUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="kontakt_id", type="string", length=45, nullable=true)
     */
    private $kontaktId;

    /**
     * @var integer
     *
     * @ORM\Column(name="news_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $newsId;



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

    /**
     * Get newsId
     *
     * @return integer 
     */
    public function getNewsId()
    {
        return $this->newsId;
    }
}
