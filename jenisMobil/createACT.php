<?php 
	// koneksi database
	include '../koneksi.php';
	 
	// menangkap data yang di kirim dari form
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	 
	// menginput data ke database
	mysqli_query($koneksi,"INSERT INTO jenis_mobil (id_jenis_mobil, nama_jenis_mobil, status_jenis_mobil) VALUES('$id', '$nama', 1)");
	 
	// mengalihkan halaman kembali ke index.php
	header("location:index.php");
?>