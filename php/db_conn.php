<?php

$sname= "localhost";
$unmae= "root";
$password = "";
$db_name = "brand";

$conn = new mysqli('localhost','root','','brand');
if($conn->connect_error){
	die('Connection Failed : '.$conn->connect_error);
}
?>