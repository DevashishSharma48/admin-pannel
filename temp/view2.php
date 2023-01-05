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
<style>
.container{
  margin: auto;
  text-align: center;
  width: 400px; 
  padding:30px;
}
</style>
</head>
<body class="">
	<h2 class=" mt-3 text-center "> View</h2><br>
	<div class=" form-outline mb-4"/>
	
	<section>
	<table class="table table-striped table-borderrer">
	<thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">ADmin Name</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  
<?php	
	
	$sql = "SELECT * FROM admin";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo"<tr>";
			echo"<td>" .$row['id']. "</td>";
			echo"<td>" .$row['admin_name']. "</td>";
			echo"<td>" .$row['username']. "</td>";
			
			echo"<td>" .$row['password']. "</td>" ;
			echo"<td>" .$row['status']. "</td>" ;
			echo"<td>";
			echo "<div class='btn-group'>";
            echo "<a class='btn btn-primary' href='./edit.php?id=" .$row['id'] ."'> Edit </a>";
            echo "<a class='btn btn-danger' href='./delete.php?id=" .$row['id'] ."'> Delete</a>";
            echo "</div>";
            echo "</td>";
            echo "</tr>";
			}
			echo "</table>";
	} else { echo "0 results"; }
			$conn->close();
?>
</table>
	</section>
	
</body>
</html>
