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

$tasks = [
    new Task('Ep11: MySQL 101'),
    new Task('Ep12: Classes 101'),
    new Task('Ep13: Intro to PDO'),
    new Task('Ep13: Intro to PDO'),
    new Task('Ep14: Refactoring and Colla...!')
];

for ($i = 0; $i <= count($tasks) - 2; $i++) {
    $tasks[$i]->complete();
}
