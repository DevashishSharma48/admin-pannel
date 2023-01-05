<?php
	include_once("db_connection.php");
	include('check_session.php');
?>

<?php
if(isset($_POST['update'])){
	$id = mysqli_real_escape_string($conn, $_POST['id']);
	$admin_name = mysqli_real_escape_string($conn, $_POST['name']);
	$username= mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$status = mysqli_real_escape_string($conn, $_POST['status']);
	
	
if(empty($admin_name) || empty($username) || empty($password) || empty($status)){
	
if(empty($admin_name)) {
	echo ' Admin Name field is empty.<br>';
}
if(empty($username)) {
	echo 'Username field is empty.<br>';
}
if(empty($password)) {
	echo 'Password is empty.<br>';
	}		
if(empty($status)) {
	echo 'Status field is empty.<br>';
	}
		
} else {
	$result = mysqli_query($conn, "UPDATE admin SET admin_name='$admin_name', username='$username', password='$password', status='$status' WHERE id='".$_SESSION['id']."'");
	header("Location: login.php");
	echo "Done.";
}
}

?>s