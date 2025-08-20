<?php 
session_start();

 $num = (int) $_POST['otp'];

 if ($_SESSION['otp'] === $num) {
        unset($_SESSION['otp']); 
        header("Location: CRUD/index.php");
        exit();
    } else {
        header("Location: otp.html");
        exit();
    }

?>
