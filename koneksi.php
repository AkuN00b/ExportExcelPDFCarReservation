<?php 
$koneksi = mysqli_connect("localhost:3307","root","","prg5_20221");
 
// Check connection
if (mysqli_connect_errno()) {
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>