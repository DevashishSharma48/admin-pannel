<?php
		include('db_connection.php');
		$admin_name=$_REQUEST['name'];
		$femail=$_REQUEST['username'];
		$password=$_REQUEST['password'];
		$status=$_REQUEST['status'];
	
		$query=mysqli_query($conn,"select * from `admin`");
	
		if (mysqli_num_rows($query) == 0){
			header('admin.php');
			echo "ID and Password incorrect <br> session time out.";
			echo "<a href='admin.php'><br> Login here </a>";
		}
		else{
			$row=mysqli_fetch_array($query);			
		
		
			header('location:view.php');
		}
?>