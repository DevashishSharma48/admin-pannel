<?php

	include('db_connection.php');
	
?>

<!DOCTYPE html>
<html>
<head>
<title> View Data</title>
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

.btn{
	background-color:white;
	border:2px solid black;
	color: green;
	padding: 5px 10px;
	text-align: center;
	display:inline-block;
	font-size:20px;
	margin:10px 30px;
	cursor: pointer;
}
</style>
</head>
<body class="">
	<h2 class=" mt-3 text-center "> View Admin</h2><br>	
	<div class=" form-outline mb-4"/>
	<button class="btn text-right"
		onclick="window.location.href='./state.php';"> Add
</button>		
	<section>
	<table class="table table-striped table-borderrer">
	<thead>
    <tr>
      <th scope="col">id</th>
      <th>State Name</th>
      <th>Actions</th>
    </tr>
  </thead>
  
<?php	
	
	$sql = "SELECT * FROM state ORDER BY id DESC";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo"<tr>";
			echo"<td>" .$row['id']. "</td>";
			echo"<td>" .$row['state_name']. "</td>";
			echo"<td>";
			echo "<div class='btn-group'>";
            
            echo "<a class='btn btn-primary' href='./edit1.php?id=" .$row['id'] ."'> Edit </a>";
            echo "<a class='btn btn-danger' href='./delete_state.php?id=" .$row['id'] ."'> Delete</a>";
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

