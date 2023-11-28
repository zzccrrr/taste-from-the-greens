<?php

$host = 'localhost';
$dbname = 'taste_from_the_greens';
$dbusername = 'root';
$dbpassword = '';

try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $dbusername, $dbpassword);
    $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}