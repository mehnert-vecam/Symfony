<?php

namespace Vest\ResponsaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BnrBanner
 */
class BnrBanner
{
    /**
     * @var integer
     */
    private $bannerId;

    /**
     * @var string
     */
    private $bannerName;

    /**
     * @var string
     */
    private $bannerDatei;

    /**
     * @var string
     */
    private $bannerFormat;

    /**
     * @var integer
     */
    private $bannerPrio;

    /**
     * @var integer
     */
    private $kontaktId;


    /**
     * Get bannerId
     *
     * @return integer 
     */
    public function getBannerId()
    {
        return $this->bannerId;
    }

    /**
     * Set bannerName
     *
     * @param string $bannerName
     * @return BnrBanner
     */
    public function setBannerName($bannerName)
    {
        $this->bannerName = $bannerName;

        return $this;
    }

    /**
     * Get bannerName
     *
     * @return string 
     */
    public function getBannerName()
    {
        return $this->bannerName;
    }

    /**
     * Set bannerDatei
     *
     * @param string $bannerDatei
     * @return BnrBanner
     */
    public function setBannerDatei($bannerDatei)
    {
        $this->bannerDatei = $bannerDatei;

        return $this;
    }

    /**
     * Get bannerDatei
     *
     * @return string 
     */
    public function getBannerDatei()
    {
        return $this->bannerDatei;
    }

    /**
     * Set bannerFormat
     *
     * @param string $bannerFormat
     * @return BnrBanner
     */
    public function setBannerFormat($bannerFormat)
    {
        $this->bannerFormat = $bannerFormat;

        return $this;
    }

    /**
     * Get bannerFormat
     *
     * @return string 
     */
    public function getBannerFormat()
    {
        return $this->bannerFormat;
    }

    /**
     * Set bannerPrio
     *
     * @param integer $bannerPrio
     * @return BnrBanner
     */
    public function setBannerPrio($bannerPrio)
    {
        $this->bannerPrio = $bannerPrio;

        return $this;
    }

    /**
     * Get bannerPrio
     *
     * @return integer 
     */
    public function getBannerPrio()
    {
        return $this->bannerPrio;
    }

    /**
     * Set kontaktId
     *
     * @param integer $kontaktId
     * @return BnrBanner
     */
    public function setKontaktId($kontaktId)
    {
        $this->kontaktId = $kontaktId;

        return $this;
    }

    /**
     * Get kontaktId
     *
     * @return integer 
     */
    public function getKontaktId()
    {
        return $this->kontaktId;
    }
}
