<?php
session_start(); //starting the session
include 'dbcoonect.php';

$username = $_POST['username'];
$password = $_POST['password'];

////checking if user exists i the data base
$sql="SELECT * FROM userinfo WHERE username='$username' AND
password='$password'";
$result=$connection->query($sql);

if(!$row=$result->fetch_assoc()) {
  header("Location:error.php"); }

else {
  $_SESSION['name']=$_POST['username'];
}
header("Location:home.php");

?>
