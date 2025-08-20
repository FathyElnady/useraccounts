<?php
$connect = include('connect.php');

$id      = $_POST['id'];
$name    = $_POST['name'];
$email   = $_POST['email'];
$phone   = $_POST['phone'];
$address = $_POST['address'];

$query = "UPDATE clients SET 
          name='$name', email='$email', phone='$phone', address='$address' 
          WHERE id=$id";

mysqli_query($connect, $query);

header("Location: index.php");
exit();
?>
