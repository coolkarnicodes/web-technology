<?php
if(isset($_POST['submit']))
{
$question = $_POST['question'];
}

$servername = "localhost";

$username = "root";

$password = "";

$conn = new mysqli($servername,$username,$password);

if($conn->connect_error)
{
die("Connection Failure:"
.$conn->connect_error);
}

$sql = "INSERT INTO sign.`questions` (`question`) VALUES ('$question');";

if($conn->connect_error){
die("Connection Failure:"
    .$conn->connect_error);
    echo"Connection Error";
    }else{
    header("Location: main.html");
    }

    $conn->query($sql);

    $conn->close();
?>