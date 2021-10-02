<?php

function connectToMyFirstDB()
{
     $host = '127.0.0.1';
     $dbname = 'PHP_Learning';
     $user = 'root';
     $pass = '';
     $charset = 'utf8mb4';

     $dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

     try {
          $pdo = new PDO($dsn, $user, $pass);
     } catch (PDOException $e) {
         die($e -> getMessage());
     }

     return $pdo;
}

