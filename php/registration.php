<?php

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

//Database Connection
$conn = new mysqli('localhost','root','','brand');
if($conn->connect_error){
	die('Connection Failed : '.$conn->connect_error);
}
else
{
	$stmt = $conn->prepare("insert into users(username , email , password) values(?,?,?)");
	$stmt->bind_param("sss", $username , $email, $password);
	$stmt->execute();
	?>
			<script>
				location.replace("../index.html");
				alert("Registration successfull")
			</script>
			<?php
	$stmt->close();
	$conn->close();
}


?>