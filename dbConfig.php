<?php
//db details
$dbServer= '146.185.160.162';
$dbUsername = 'root';
$dbPassword = 'opom2317';
$dbName = 'permohonan';

//Connect and select the database
$db = new mysqli($dbServer, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>
