<?php
if(isset($_POST['signup']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];

}

// Server name must be localhost
$servername = "localhost";

// In my case, user name will be root
$username = "root";

// Password is empty
$password = "";

// Creating a connection
$conn = new mysqli($servername,
			$username, $password);

// Check connection
if ($conn->connect_error) {
	die("Connection failure: "
		. $conn->connect_error);
}



$sql = "INSERT INTO sign.`up` (`name`, `email`, `pass`) VALUES ('$name', '$email', '$pass');";

if ($conn->connect_error) {
	die("Connection failure: "
		. $conn->connect_error);
		echo"Connection Error";
}else{
	header("Location: khet.html");
}

$conn->query($sql);
//	echo "Database with name geekdata";
//} else {
//	echo "Error: " . $conn->error;
//}

// Closing connection
$conn->close();
?>
