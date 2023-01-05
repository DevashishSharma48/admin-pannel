<?php

	include('db_connection.php');
?>

<!DOCTYPE html>
<html>
<head>
<title> Login Bootstrape</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width-device-width, initial-scale=1"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"/>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="">
	<h2 class=" mt-3 text-center "> Login Success</h2><br>
	<div class=" form-outline mb-4"/>
	
	<section>
	<table class="table table-striped table-borderrer">
	<thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">admin_name</th>
      <th scope="col">username</th>
      <th scope="col">password</th>
      <th scope="col">status</th>
	</tr>
  </thead>
<?php
	$sql = "SELECT * FROM admin where id='".$_SESSION['id']."'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo"<tr>";
			echo"<td>" .$row['id']. "</td>";
			echo"<td>" .$row['admin_name']. "</td>";
			echo"<td>" .$row['username']. "</td>";
			echo"<td>" .$row['password']. "</td>" ;
			echo"<td>" .$row['status']. "</td>" ;
			echo "</tr>";
			}
			echo "</table>";
	} else { echo "0 results"; }
			$conn->close();
?>
</table>
	<div class="text-center">
	<div class="btn-group col-md-1 mb-2">
	<a class=" btn btn-secondary" href="./add.php" >Add</a>
	</div>
	
	<div class="btn-group col-md-1 mb-2">
	<a class=" btn btn-warning" href="./view.php" >View</a>
	</div>
	
	
	<div class="btn-group col-md-1 mb-2">
	<a class=" btn btn-primary" href="./edit.php" >Edit</a>
	</div>
	
	<div class="btn-group col-md-1 mb-2">
	<a class="btn btn-danger" href="./delete.php"> Delete</a>
	</div>
	
	</div>

	<div class="container text-center">
	<a href="logout.php"  style="width:10%" class="btn btn-success btn-lg ">Logout</a>
	</div>
	</section>
	
</body>
</html>

