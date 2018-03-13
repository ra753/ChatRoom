<?php
include 'dbcoonect.php';
$val=$_POST["logout"];
session_start();

$sql="DELETE FROM chatbox";
$result=$connection->query($sql);


session_destroy();
header("Location:index.php");
 ?>
