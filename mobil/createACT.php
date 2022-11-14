<?php 
	// koneksi database
	include '../koneksi.php';
	 
	// menangkap data yang di kirim dari form
	$id = $_POST['id'];
	$jenis_mobil = $_POST['jenis_mobil'];
	$nama_mobil = $_POST['nama_mobil'];
	$stok_mobil = $_POST['stok_mobil'];
	$harga_mobil = $_POST['harga_mobil'];
	 
	// menginput data ke database
	mysqli_query($koneksi,"INSERT INTO mobil (id_mobil, id_jenis_mobil, nama_mobil, stok_mobil, harga_mobil) VALUES('$id', '$jenis_mobil', '$nama_mobil','$stok_mobil','$harga_mobil')");
	 
	// mengalihkan halaman kembali ke index.php
	header("location:index.php");
?>