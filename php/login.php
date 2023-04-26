<?php 

$email = $_POST['email'];
$password = $_POST['password'];

//Database Connection
$conn = new mysqli('localhost','root','','brand');

if ($conn->connect_error) {

	die('Connection Failed : '.$conn->connect_error);
	// code...
}
else
{
	$stmt = $conn->prepare("select * from users where email=?");
	$stmt->bind_param("s",$email);
	$stmt->execute();
	$stmt_result = $stmt->get_result();
	if($stmt_result->num_rows > 0){
		$data = $stmt_result->fetch_assoc();
		if ($data['password']===$password) {
			?>
			<script>
				location.replace("../Home.html");
			</script>
			<?php
		}
		else{
			?>
			<script>
				alert("Invalid Email or Password ");
				location.replace("../index.html");
			</script>
		<?php
		}
	}
	else {
		?>
			<script>
				alert("Invalid Email or Password ");
				location.replace("../index.html");
			</script>
		<?php
	}
}

 ?>
