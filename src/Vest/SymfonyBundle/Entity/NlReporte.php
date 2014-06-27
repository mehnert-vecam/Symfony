<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NlReporte
 *
 * @ORM\Table(name="nl_reporte")
 * @ORM\Entity
 */
class NlReporte
{
    /**
     * @var integer
     *
     * @ORM\Column(name="auftrag_id", type="bigint", nullable=true)
     */
    private $auftragId;

    /**
     * @var string
     *
     * @ORM\Column(name="report_name", type="string", length=45, nullable=true)
     */
    private $reportName;

    /**
     * @var string
     *
     * @ORM\Column(name="report_url", type="string", length=45, nullable=true)
     */
    private $reportUrl;

    /**
     * @var integer
     *
     * @ORM\Column(name="report_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
