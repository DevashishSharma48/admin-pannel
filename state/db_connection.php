
<?php

session_start(); 	
$conn = new mysqli('127.0.0.2','root','','data');
	if(!$conn){
		die("connection is failed " . 
		mysqli_connect_error());
	}
?>


