<?php

function connectToMyFirstDB()
{
     $host = '127.0.0.1';
     $dbname = 'MY_FIRST_DB';
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

