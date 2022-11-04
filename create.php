     <?php
     include"inc/db.php";
     if(isset($_POST['submit'])){
     	$Fname = $_POST['fname'];
     	$Sname = $_POST['sname'];
     	$User = $_POST['user'];
     	$Mail = $_POST['email'];
     	$Pass = $_POST['pass'];

     $sql= "INSERT INTO try(first_name,second_name,user,email,password) VALUE('$Fname','$Sname','$User','$Mail','$Pass')";
     $query = mysqli_query($connect,$sql);
     if (!$query) {
     	die('Error' mysqli_error($connect));
     }
     }
     ?>
	 