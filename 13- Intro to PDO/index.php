<?php

require 'functions.php';

$pdo = connectToMyFirstDB();

$statement = $pdo->prepare('SELECT * FROM tasks');
$statement->execute();
$data = $statement->fetchAll(PDO::FETCH_OBJ);

require 'index.view.php';
