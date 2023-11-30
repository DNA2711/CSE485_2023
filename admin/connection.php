<?php
function getCon() {
    $db = 'BTTH01_CSE485';
    $host= 'localhost';
    $user = 'root';
    $pass = '1';
    $charset = 'utf8mb4';
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    try {
        $conn = new PDO($dsn, $user, $pass);
        return $conn;
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
        return null;
    }
}

