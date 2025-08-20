<?php

$connect=include('connect.php');

$task=$_POST['task'];
$query="INSERT INTO tasks(task) VALUES ('$task')";

mysqli_query($connect,$query);

header("Location: CRUD.php");
exit();