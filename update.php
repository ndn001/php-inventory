<?php
require 'koneksi.php';
$jenis              = $_POST['jenis'];
$merk               = $_POST['merk'];          
$serialnumber       = $_POST['serialnumber']; 
$barcode            = $_POST['barcode']; 
$harga              = $_POST['harga']; 
$date               = $_POST['date'];

$query_sql = "INSERT INTO tbl_data (jenis, merk, serialnumber, barcode, harga, date) 
                VALUES ('$jenis', '$merk', '$serialnumber', '$barcode', '$harga', 'date')";

if (mysqli_query($conn, $query_sql)) {
    header("Location: update.html");
    exit();
} else {
    echo "Update Inventory Gagal : " . mysqli_error($conn);
    exit();
}
?>

