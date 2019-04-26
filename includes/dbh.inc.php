<?php

$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "loginsystem";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbName", $dbUsername, $dbPassword); 
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT uidUsers FROM users WHERE uidUsers=:uid";
}
catch(PDOException $e){
    echo 'Echec : ' . $e->getMessage();
}
