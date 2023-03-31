<?php
$servername = "localhost";
$dbname = "pc-mobile";
$user = "root";
$passwd = "123123";

$dsn = "mysql:host=$servername;dbname=$dbname";

$pdo = new PDO($dsn, $user, $passwd);
try {

    $conn = $pdo;

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
