<?php
$connect = include('connect.php');

$name    = $_POST['name'];
$email   = $_POST['email'];
$phone   = $_POST['phone'];
$address = $_POST['address'];

$query = "INSERT INTO clients (name,email,phone,address) 
          VALUES ('$name','$email','$phone','$address')";

mysqli_query($connect, $query);

header("Location: index.php");
exit();
?>
