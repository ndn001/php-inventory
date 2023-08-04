<?php
$servername = "127.0.0.1";
$database = "inventori";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn){
	die("Koneksi gagal : " . mysqli_connect_error());
} else {
	echo "Koneksi berhasil !!!!!!!! ";
}
?>