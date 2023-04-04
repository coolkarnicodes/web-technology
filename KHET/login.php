<?php
if(isset($_POST['login']))
{
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



$sql = "SELECT  `pass` FROM sign.`up` WHERE email = '$email';";
$passwd = "Hello";

if($conn->query($sql) == TRUE)
{
	$result = $conn->query($sql);
	if($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc())
		{
			
			$passwd = $row["pass"];
			
		}
	}
	else 
	{
		echo "0 results";
	}
	if("$passwd"=="$pass") {echo "password in authenticated";header("Location: main.html");}
	else {echo "Email Id or Password in Incorrect";}	
}
else {
	echo "Error : " .$conn->error;
}




// Closing connection
$conn->close();
?>