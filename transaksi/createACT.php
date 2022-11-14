<?php 
	// koneksi database
	include '../koneksi.php';
	 
	// menangkap data yang di kirim dari form
	$id = $_POST['id'];
	$mobil = $_POST['mobil'];
	$tanggal_peminjaman = $_POST['tanggal_peminjaman'];
	$lama_peminjaman = $_POST['lama_peminjaman'];
	$harga_peminjaman = $_POST['harga_peminjaman'];
	 
	// menginput data ke database
	mysqli_query($koneksi,"INSERT INTO peminjaman (id_peminjaman, id_mobil, tanggal_peminjaman, lama_peminjaman, harga_peminjaman) VALUES('$id', '$mobil', '$tanggal_peminjaman','$lama_peminjaman','$harga_peminjaman')");
	 
	// mengalihkan halaman kembali ke index.php
	header("location:lihatRiwayatTransaksi.php");
?>