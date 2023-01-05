<?php
 include("db_connection.php"); 
//getting id of the data from url
$id = $_GET['id'];
 
//deleting the row from table
$result = mysqli_query($conn, "DELETE FROM country WHERE id=$id");
 
//redirecting to the display page (index.php in our case)
header("Location:view_country.php");
?>