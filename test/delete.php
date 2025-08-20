<?php
$connect=include('connect.php');
$id=$_GET['id'];
$query="DELETE  FROM tasks WHERE id=$id";
mysqli_query($connect,$query);


header("Location: CRUD.php");
exit();
?>