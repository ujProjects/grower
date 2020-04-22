<?php
session_start();
$hostdb = "localhost";
$userdb = "root";
$passworddb = "root";
$databasedb = "Grower";
$dbuser = new mysqli($hostdb, $userdb, $passworddb, $databasedb);
$dbuser->set_charset('utf8mb4');

function query($sql)
{
    global $dbuser;
    $result = $dbuser->query($sql);
    return $result;
}

function fetchQuery($sql)
{
    global $dbuser;
    $result = query($sql)->fetch_array();
    return $result;
}

 ?>
