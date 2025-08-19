<?php



$connect = include('connt.php');

$name=$_POST['fName'] .' '. $_POST['lName'];
$email=$_POST['email'];
$pass=$_POST['pass'];

$qury="INSERT INTO user.users (name ,email,password) VALUES ('$name','$email','$pass')";

if( mysqli_query($connect,$qury))
{
    header("Location: login.html");
    exit();

}

?>