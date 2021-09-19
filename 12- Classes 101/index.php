<?php

require 'TaskClass.php';

$tasks = [
    new Task('Ep11: MySQL 101'),
    new Task('Ep12: Classes 101'),
    new Task('Ep13: Intro to PDO'),
];

$tasks[0]->complete();
$tasks[2]->complete();

require 'index.view.php';
