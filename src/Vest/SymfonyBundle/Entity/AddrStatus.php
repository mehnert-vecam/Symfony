<?php
namespace Vest\SymfonyBundle\Entity;

class AddrStatus{
    protected $task;
    protected $status_id;
    protected $statusObjekt;

    protected $dueDate;

    public function getStatusId()
    {
        return $this->status_id;
    }

    public function setStatusId($status_id)
    {
        $this->status_id = $status_id;
    }

    public function getStatusObjekt()
    {
        return $this->statusObjekt;
    }

    public function setStatusObjekt($statusObjekt)
    {
        $this->statusObjekt = $statusObjekt;
    }

    public function getTask()
    {
        return $this->task;
    }

    public function setTask($task)
    {
        $this->task = $task;
    }

    public function getDueDate()
    {
        return $this->dueDate;
    }

    public function setDueDate(\DateTime $dueDate = null)
    {
        $this->dueDate = $dueDate;
    }
}