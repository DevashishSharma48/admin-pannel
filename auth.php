<?php
include('db_connection.php');
	if(isset($_POST['login'])){
		$username=$_REQUEST['username'];
		$password=$_REQUEST['password'];
	
		$query=mysqli_query($conn,"select * from `admin` where username='$username' && password='$password'");
	
		if (mysqli_num_rows($query) == 0){
			header('login.php');
			echo "ID and Password incorrect <br> session time out.";
			echo "<a href='login.php'><br> Login here </a>";
		}
		else{
			$row=mysqli_fetch_array($query);			
			$_SESSION['id']=$row['id'];
		
			header('location:dashboard.php');
		}
	}
?>