<?php
session_start();

$sql= mysqli_connect('$db_host', '$db_username', '$db_password','$db_name');

if (!$sql){
	die("unable to connect to mysqli".mysqli_connect_error());
}
?>
