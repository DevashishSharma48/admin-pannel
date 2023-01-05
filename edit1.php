<?php
include_once('db_connection.php');
include('check_session.php');
?>

<?php

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM admin WHERE id='".$_SESSION['id']."'");

while($res = mysqli_fetch_array($result))
{
	$admin_name = $res['admin_name'];
	$username = $res['username'];
	$password = $res['password'];
	$status   =$res['status'];
}
?>

<DOCTYPE html!>

<html>
<head>
	<title> Admin Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale=1"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="container mt-3 ">
	<h2 class="container mt-3 mb-4 text-center" >Edit  Admin Details</h2>
	
	<form action="edit_process.php" method="POST">
	<div class="form-outline col-md-3 mb-4" id="name">
        Admin Name<input type="text" class="form-control form-control-lg" name="name" value="<?php echo $admin_name;?>">
	</div>
	
	<div class="form-outline col-md-3 mb-4" id="name">
        Username<input type="email" class="form-control form-control-lg" name="username"  value=<?php if(isset($username)){echo $username ;}?>>
	</div>
	
	<div class="form-outline col-md-3 mb-4" id="name">
        Password<input type="password" class="form-control form-control-lg" name="password"  value="<?php if(isset($password)){echo $password;}?>"/ >
	</div>
	
	<div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                  <h6 class="mb-0 me-4" id="gender">Status: </h6>
				  
				 <div class="form-check form-check-inline mb-0 me-4">
                    Active<input class="form-check-input" type="radio" name="status"   value="Active" <?php if(isset($status)){echo $status;}?>/>
                  </div>

                  <div class="form-check form-check-inline mb-0">
                   Inactive<input class="form-check-input" type="radio" name="status"  value="Inactive" <?php if(isset($status)){echo $status;}?>/>
				  </div>
                </div>
				<div>
				<a href='login.php'>Already have an account </a>
				</div>
	 <div class="d-flex justify-content-end pt-3">
				<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
                  <input type="reset" class="btn btn-light btn-lg">
                  <button type="submit" class="btn btn-warning btn-lg ms-2" name="update" value="submit">Save</button>
                </div>
	</form>
	</div>
	
</body>
</html>

	