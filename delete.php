<?php
include "inc/db.php";
if(isset($_POST['delete'])){
	 $delete= $_GET['delete'];
	 $sql= "DELETE FROM try WHERE id = $delete";
	  $query= mysqli_query($connect,$sql); 
	 header("Location:read.php");
}
?>