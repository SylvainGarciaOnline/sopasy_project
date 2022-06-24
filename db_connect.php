<?php

$db_servername = "localhost";
$db_dbname = "db_sopasy";
$db_username = "root";
$db_password = "Pa\$\$w0rd";

try {
    $db = new PDO("mysql:host=$db_servername;dbname=$db_dbname", $db_username, $db_password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: ".$e->getMessage();
}