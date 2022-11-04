<?php
include"inc/db.php";
if(isset($_POST['update'])){
	$update = $_GET['update'];
	$id= $_POST['update'];
	$nam= $_POST['fname'];
	$sur= $_POST['sname'];
	$user= $_POST['user'];
	$email= $_POST['email'];
	$pass=  $_POST['pass'];
$sql= "UPDATE try SET first_name='$nam',second_name='$sur',user='$user',
email='$email', password='$pass' WHERE $id = $update";
$query = mysqli_query($connect,$sql); 
}

?>
<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>assign</title>
	</head>
	<body>
	<form action="" method="POST">
		<label for="First_name">First Name</label>
		<br><input type="text" name="fname" id="First_name" placeholder="First Name" required>
		<br>
		<label for="second_name">Second Name</label>
		<br><input type="text" name="sname" id="second_name" required placeholder="Second Name"><br>
		<label for="User">User</label>
		<br><input type="text" name="user"  id="user" required placeholder="User"><br>
		<label for="email">Email</label>
		<br><input type="Email" name="email"   id="email" required placeholder="Email"><br>
		<label for="password">Password</label>
		<br><input type="password" name="pass"   id="password" placeholder="Password" required>
		<br><br> 
		<button types= submit name="update">Update</button>
	</form>
	</body>
	</html>