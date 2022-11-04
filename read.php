 <?php
include "inc/db.php"
 ?>
<!doctype html>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>assign</title>
	</head>
	<body>
	<table border="2" cellspacing="3" cellpadding="2">
	<tr bgcolor="darkgreen">
		<th>Id</th>
		<th>First Name</th>
		<th>Second Name</th>
		<th>User</th>
		<th>Email</th>
		<th>Password</th>
		<th>Update</th>
		<th>Delete</th>
	</tr>
	<?php
		 $sql = "SELECT * FROM try";
		 $query = mysqli_query($connect,$sql);
		 	while($row= mysqli_fetch_assoc($query)){
		 	$id = $row ['id'];
		 	$fname = $row['first_name'];
		 	$lname = $row['second_name'];
		 	$user  = $row['user'];
		 	$email = $row['email'];
		 	$pass = $row['password'];
?>
	 	
			<tr>
				<td><?= $id ?></td>
				<td><?= $fname ?></td>
				<td><?= $lname ?></td>
				<td><?= $user ?></td>
				<td><?= $email ?></td>
				<td><?= $pass ?></td>
				<td><a href="update.php?update=<?=$id; ?>">update</a></td>
				<td><a href="delete.php?delete=<?=$id; ?>">Delete</a></td>
			</tr>
<?php } ;?>
</table>
	</body>
	</html>