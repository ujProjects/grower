<?php 

$hostdb = "localhost";
$userdb = "root";
$passworddb = "root";
$databasedb = "Grower";
$dbuser = new mysqli($hostdb, $userdb, $passworddb, $databasedb);
$dbuser->set_charset('utf8mb4');



 ?>