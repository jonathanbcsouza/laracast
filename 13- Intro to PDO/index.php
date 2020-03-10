<?php

require 'TaskClass.php';

$host = '127.0.0.1';
$db   = 'MyFirstDB';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$options = [
    \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
    \PDO::ATTR_EMULATE_PREPARES   => false,
];
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
try {
     $pdo = new \PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

$statement = $pdo->prepare('select * from topics');


$statement->execute();

$tasksDB = $statement->fetchAll(PDO::FETCH_OBJ);

var_dump($results[1]->description);

require 'index.view.php';
