<?php 
	// koneksi database
	include '../koneksi.php';
	 
	// menangkap data id yang di kirim dari url
	$id = $_GET['id'];	 
	 
	// menghapus data dari database
	mysqli_query($koneksi, "UPDATE jenis_mobil SET status_jenis_mobil = 0 WHERE id_jenis_mobil='$id'");
	 
	// mengalihkan halaman kembali ke index.php
	header("location:index.php");
?>