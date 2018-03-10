<?php
session_start();
include 'dbcoonect.php';
$msg=$_POST['msg'];
$name=$_SESSION['name'];

$sql="insert into chatbox(msg,name) values ('$msg','$name')";
$result=$connection->query($sql);

header("Location:home.php");

 ?>
