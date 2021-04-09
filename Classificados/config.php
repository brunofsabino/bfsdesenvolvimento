<?php
session_start();

$dbname = 'classificados';
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
try {
    $pdo = new PDO("mysql:dbname=".$dbname.";host=".$dbhost, $dbuser, $dbpass);
} catch (PDOException $e) {
    echo "ERROR: " . $e->getMessage;
    exit;
}