<?php
 include("db_connection.php"); 
//getting id of the data from url
$id = $_GET['id'];
 
//deleting the row from table
$result = mysqli_query($conn, "DELETE FROM state WHERE id=$id");
 
//redirecting to the display page (index.php in our case)

        if ($result==0){
            echo '<script>alert("State Added Successfully")</script>';
		}
?>