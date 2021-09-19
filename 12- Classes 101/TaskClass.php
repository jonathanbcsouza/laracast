<?php

class Task {
    public $description;
    public $completed = false;

    // Automatically triggered on instantiation
    public function __construct($description) {
        $this->description = $description;
    }

    public function complete() {
        $this->completed = true;
    }
}