<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'cardifydb';

    // Set DSN (Data Source Name)
    $dsn = 'mysql:host='. $host . ';dbname='. $dbname;

    // PDO Instance
    $pdo = new PDO($dsn, $user, $password);
?>