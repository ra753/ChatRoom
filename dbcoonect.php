<?php

$connection = mysqli_connect("localhost","root","","signup");
if(!$connection)
{
 die ("Couldn't connect to the database" .mysqli_connect_error());
}
?>
