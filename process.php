<?php
	include 'db_connection.php';

	$adminname = $_REQUEST['name'];

	$username = $_REQUEST['username'];

	$password =$_REQUEST['password'];

	$status=$_REQUEST['status'];

    $query = "INSERT INTO admin (admin_name, username, password, status) VALUES ('$adminname','$username', '$password', '$status')";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo"New data Inserted <br>";
		echo "<a href='login.php'>Login here </a> <br>";
		echo "<a href='admin.php'>Signup here </a>";
	}else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		}

$conn->close();


?>
