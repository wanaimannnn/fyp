<?php
   // define database related variables
   $db = 'permohonan';
   $host = '146.185.160.162';
   $username = 'root';
   $password = 'opom2317';

   // try to conncet to database
   $dbh = new PDO("mysql:dbname={$db};host={$host};port={3306}", $username, $password);

   if(!$dbh){

      echo "unable to connect to database";
   }

?>
