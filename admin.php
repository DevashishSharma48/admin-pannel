
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
	<h2 class="container mt-3 mb-4 text-center" > Admin Login</h2>
	<?php
	?>
	<form action="process.php" method="POST">
	<div class="form-outline col-md-3 mb-4" id="name">
        Admin Name<input type="text" class="form-control "name="name" >
	</div>
	
	<div class="form-outline col-md-3 mb-4">
        Username<input type="email" class="form-control" name="username" >
	</div>
	
	<div class="form-outline col-md-3 mb-4" id="name">
        Password<input type="password" class="form-control" name="password" >
	</div>
	
	<div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                  <h6 class="mb-0 me-4" id="gender">Status: </h6>
				  
				 <div class="form-check form-check-inline mb-0 me-4">
                    Active<input class="form-check-input" type="radio" name="status"   value="Active" />
                  </div>

                  <div class="form-check form-check-inline mb-0">
                   Inactive<input class="form-check-input" type="radio" name="status"  value="Inactive" />
				  </div>
                </div>
				<div>
				<a href='login.php'>Already have an account </a>
				</div>
	<div>
        <input type="submit" name="login"class="btn btn-warning mx-auto" value="submit">
	</div>
	</form>
	</div>
	
</body>
</html>