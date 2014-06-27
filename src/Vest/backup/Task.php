<?php
namespace Vest\SymfonyBundle\Entity;

class Task{
    protected $task;
    protected $status_id;
    protected $status_object;

    protected $dueDate;

    public function getStatusId()
    {
        return $this->status_id;
    }

    public function setStatusId($status_id)
    {
        $this->status_id = $status_id;
    }

    public function getStatusObject()
    {
        return $this->status_object;
    }

    public function setStatusObject($status_object)
    {
        $this->status_object = $status_object;
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