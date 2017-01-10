<?php
   // define database related variables
   $db = 'permohonan';
   $host = 'localhost';
   $username = 'root';
   $password = 'opom2317';

   // try to conncet to database
   $dbh = new PDO("mysql:dbname={$db};host={$host};port={3306}", $username, $password);

   if(!$dbh){

      echo "Unable to connect to database";
   }

?>
