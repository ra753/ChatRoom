<?php

include 'dbcoonect.php';
$errors=array();

$name = $_POST['name'];
$phno = $_POST['number'];
$dob = $_POST['dob'];
$pas = $_POST['password'];

if (empty($name)) {
    array_push($errors, "Name is required!");
}
if (empty($pas)) {
    array_push($errors, "Password is required");
}
include 'errors.php';

$pass=md5($pas);

$sql = "insert into userinfo(username, phone, dob, password)
values ('$name','$phno','$dob','$pass')";
$result=$connection->query($sql);

header("Location:index.php");

 ?>
