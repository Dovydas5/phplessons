<?php
$servername = "app_mysqli";
$userName1 = "root";
$passWord1 = "root";

try {
    $conn = new PDO("mysql:host=$servername;dbname=loginApp", $userName1, $passWord1);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}