<?php

require 'functions.php';
require 'TaskClass.php';

$pdo = connectToMyFirstDB();

function fetchAllTasks($pdo)
{

    $statement = $pdo->prepare('select * from topics');

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_OBJ, 'TaskClass.php');
}

require 'index.view.php';
