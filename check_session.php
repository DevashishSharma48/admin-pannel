
<?php
include('db_connection.php');
if(strlen($_SESSION['id']< 0)){ 
	echo"session timeout<br> login again<br>";
	header('Location:login.php');
}

?>
 