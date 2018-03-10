<?php

include 'dbcoonect.php';

$name = $_POST['name'];
$phno = $_POST['number'];
$dob = $_POST['dob'];
$pass = $_POST['password'];

$sql = "insert into userinfo(username, phone, dob, password)
values ('$name','$phno','$dob','$pass')";
$result=$connection->query($sql);

header("Location:index.php");

 ?>
