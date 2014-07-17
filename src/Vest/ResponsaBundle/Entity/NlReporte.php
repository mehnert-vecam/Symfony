<?php

namespace Vest\ResponsaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NlReporte
 */
class NlReporte
{
    /**
     * @var integer
     */
    private $auftragId;

    /**
     * @var string
     */
    private $reportName;

    /**
     * @var string
     */
    private $reportUrl;

    /**
     * @var integer
     */
    private $reportId;


    /**
     * Set auftragId
     *
     * @param integer $auftragId
     * @return NlReporte
     */
    public function setAuftragId($auftragId)
    {
        $this->auftragId = $auftragId;

        return $this;
    }

    /**
     * Get auftragId
     *
     * @return integer 
     */
    public function getAuftragId()
    {
        return $this->auftragId;
    }

    /**
     * Set reportName
     *
     * @param string $reportName
     * @return NlReporte
     */
    public function setReportName($reportName)
    {
        $this->reportName = $reportName;

        return $this;
    }

    /**
     * Get reportName
     *
     * @return string 
     */
    public function getReportName()
    {
        return $this->reportName;
    }

    /**
     * Set reportUrl
     *
     * @param string $reportUrl
     * @return NlReporte
     */
    public function setReportUrl($reportUrl)
    {
        $this->reportUrl = $reportUrl;

        return $this;
    }

    /**
     * Get reportUrl
     *
     * @return string 
     */
    public function getReportUrl()
    {
        return $this->reportUrl;
    }

    /**
     * Get reportId
     *
     * @return integer 
     */
    public function getReportId()
    {
        return $this->reportId;
    }
}
