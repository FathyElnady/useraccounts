<?php


$ServerName = "localhost";
$username   = "root";
$password   = "root";
$database   = "user";

$connect = mysqli_connect($ServerName, $username, $password, $database);


return $connect;
?>
