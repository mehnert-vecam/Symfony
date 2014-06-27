<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActionLog
 *
 * @ORM\Table(name="action_log")
 * @ORM\Entity
 */
class ActionLog
{
    /**
     * @var integer
     *
     * @ORM\Column(name="person_id", type="bigint", nullable=false)
     */
    private $personId;

    /**
     * @var string
     *
     * @ORM\Column(name="person_name", type="string", length=255, nullable=false)
     */
    private $personName;

    /**
     * @var string
     *
     * @ORM\Column(name="kontakt_name", type="string", length=255, nullable=false)
     */
    private $kontaktName;

    /**
     * @var string
     *
     * @ORM\Column(name="log_action", type="string", length=255, nullable=false)
     */
    private $logAction;

    /**
     * @var string
     *
     * @ORM\Column(name="sql_query", type="text", nullable=false)
     */
    private $sqlQuery;

    /**
     * @var string
     *
     * @ORM\Column(name="sql_table", type="string", length=50, nullable=false)
     */
    private $sqlTable;

    /**
     * @var string
     *
     * @ORM\Column(name="sql_index", type="string", length=50, nullable=false)
     */
    private $sqlIndex;

    /**
     * @var integer
     *
     * @ORM\Column(name="sql_index_value", type="bigint", nullable=false)
     */
    private $sqlIndexValue;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="action_date", type="datetime", nullable=false)
     */
    private $actionDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="log_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $logId;



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

    /**
     * Get logId
     *
     * @return integer 
     */
    public function getLogId()
    {
        return $this->logId;
    }
}
