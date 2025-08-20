<?php
$sname = 'localhost';
$username = 'root';
$pass = 'root';
$db = 'crud';

$conn = mysqli_connect($sname, $username, $pass, $db);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

return $conn;
?>
