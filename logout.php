<?php
$val=$_POST["logout"];
session_start();
session_destroy();
header("Location:index.php");
 ?>
