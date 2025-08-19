<?php
session_start();


$connect=include('connt.php');

$email=$_POST['email'];
$pass=$_POST['pass'];

$query="SELECT * FROM users WHERE email='$email' AND password='$pass'";
$result=mysqli_query($connect,$query);
if($result&&mysqli_num_rows($result) > 0)
{

    $otp = rand(100000, 999999);
    $_SESSION['otp'] = $otp; 
    $subject = "Your OTP Code";
    $message = "Your verification code is: " . $otp;
    mail($email, $subject, $message);

    header("Location: otp.html");
    exit();
}
else 
{
    echo 'The pass & email is not  found ';
}









?>