<?php
$servername = "127.0.0.1";
$database = "inventori";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn){
	die("Database-Status : Disconnected : " . mysqli_connect_error());
} else {
	echo "<center>Database-Status : Connected</center>";
}
?>