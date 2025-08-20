<?php
$connect = include('connect.php');
$id = $_GET['id'] ?? 0;

if ($id) {
    $query = "DELETE FROM clients WHERE id=$id";
    mysqli_query($connect, $query);
}

header("Location: index.php");
exit();
?>
