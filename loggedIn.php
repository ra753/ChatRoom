<?php
session_start(); //starting the session

include 'dbcoonect.php';


$errors=array();

$username = $_POST['username'];
$password = $_POST['password'];

//Checking if all the fields are filled
if(empty($username)) {
  array_push($errors,"Username is required");
}

if(empty($password)) {
  array_push($errors,"Password is required");
}

if(count($errors)==0) {
  $sql="SELECT * FROM userinfo WHERE username='$username' AND
password='$password'";
$result=mysqli_query($connection, $sql);

if(mysqli_num_rows($result)==1) {
  $_SESSION['name']=$_POST['username'];
  header("Location:home.php");
} else {
  array_push($errors,"Wrong Username/Password");
}
}
include 'errors.php';

?>