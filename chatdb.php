<?php
session_start();

$sql= mysqli_connect('localhost', 'root', 'genius10','chatApp');

if (!$sql){
	die("unable to connect to mysqli".mysqli_connect_error());
}
?>