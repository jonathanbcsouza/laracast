<?php

class MyConnection {

    public static function make() {

        $db   = 'MY_FIRST_DB';
        $user = 'root';
        $pass = '';

        try {
            return new PDO('mysql:host=127.0.0.1;dbname=' . $db, $user, $pass);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
