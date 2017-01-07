<?php
//db details
$dbServer= 'localhost';
$dbUsername = 'root';
$dbPassword = 'opom2317';
$dbName = 'permohonan';

//Connect and select the database
$db = new mysqli($dbServer, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>
