<?php

namespace Vest\SharedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActionLog
 */
class ActionLog
{
    /**
     * @var integer
     */
    private $logId;

    /**
     * @var integer
     */
    private $personId;

    /**
     * @var string
     */
    private $personName;

    /**
     * @var string
     */
    private $kontaktName;

    /**
     * @var string
     */
    private $logAction;

    /**
     * @var string
     */
    private $sqlQuery;

    /**
     * @var string
     */
    private $sqlTable;

    /**
     * @var string
     */
    private $sqlIndex;

    /**
     * @var integer
     */
    private $sqlIndexValue;

    /**
     * @var \DateTime
     */
    private $actionDate;


    /**
     * Get logId
     *
     * @return integer 
     */
    public function getLogId()
    {
        return $this->logId;
    }

    /**
     * Set personId
     *
     * @param integer $personId
     * @return ActionLog
     */
    public function setPersonId($personId)
    {
        $this->personId = $personId;

        return $this;
    }

    /**
     * Get personId
     *
     * @return integer 
     */
    public function getPersonId()
    {
        return $this->personId;
    }

    /**
     * Set personName
     *
     * @param string $personName
     * @return ActionLog
     */
    public function setPersonName($personName)
    {
        $this->personName = $personName;

        return $this;
    }

    /**
     * Get personName
     *
     * @return string 
     */
    public function getPersonName()
    {
        return $this->personName;
    }

    /**
     * Set kontaktName
     *
     * @param string $kontaktName
     * @return ActionLog
     */
    public function setKontaktName($kontaktName)
    {
        $this->kontaktName = $kontaktName;

        return $this;
    }

    /**
     * Get kontaktName
     *
     * @return string 
     */
    public function getKontaktName()
    {
        return $this->kontaktName;
    }

    /**
     * Set logAction
     *
     * @param string $logAction
     * @return ActionLog
     */
    public function setLogAction($logAction)
    {
        $this->logAction = $logAction;

        return $this;
    }

    /**
     * Get logAction
     *
     * @return string 
     */
    public function getLogAction()
    {
        return $this->logAction;
    }

    /**
     * Set sqlQuery
     *
     * @param string $sqlQuery
     * @return ActionLog
     */
    public function setSqlQuery($sqlQuery)
    {
        $this->sqlQuery = $sqlQuery;

        return $this;
    }

    /**
     * Get sqlQuery
     *
     * @return string 
     */
    public function getSqlQuery()
    {
        return $this->sqlQuery;
    }

    /**
     * Set sqlTable
     *
     * @param string $sqlTable
     * @return ActionLog
     */
    public function setSqlTable($sqlTable)
    {
        $this->sqlTable = $sqlTable;

        return $this;
    }

    /**
     * Get sqlTable
     *
     * @return string 
     */
    public function getSqlTable()
    {
        return $this->sqlTable;
    }

    /**
     * Set sqlIndex
     *
     * @param string $sqlIndex
     * @return ActionLog
     */
    public function setSqlIndex($sqlIndex)
    {
        $this->sqlIndex = $sqlIndex;

        return $this;
    }

    /**
     * Get sqlIndex
     *
     * @return string 
     */
    public function getSqlIndex()
    {
        return $this->sqlIndex;
    }

    /**
     * Set sqlIndexValue
     *
     * @param integer $sqlIndexValue
     * @return ActionLog
     */
    public function setSqlIndexValue($sqlIndexValue)
    {
        $this->sqlIndexValue = $sqlIndexValue;

        return $this;
    }

    /**
     * Get sqlIndexValue
     *
     * @return integer 
     */
    public function getSqlIndexValue()
    {
        return $this->sqlIndexValue;
    }

    /**
     * Set actionDate
     *
     * @param \DateTime $actionDate
     * @return ActionLog
     */
    public function setActionDate($actionDate)
    {
        $this->actionDate = $actionDate;

        return $this;
    }

    /**
     * Get actionDate
     *
     * @return \DateTime 
     */
    public function getActionDate()
    {
        return $this->actionDate;
    }
}
