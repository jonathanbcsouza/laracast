<?php

class Task
{
    public $description;
    public $completed = false;

    public function __construct($description)
    {
        $this->description = $description;
        echo 'The constructor has automatically triggered it';
        echo nl2br("\n");
    }

    public function complete()
    {
        $this->completed = true;
    }

    public function isComplete()
    {
        return $this->completed;
    }
}