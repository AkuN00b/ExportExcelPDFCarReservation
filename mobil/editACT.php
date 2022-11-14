<?php 
  // koneksi database
  include '../koneksi.php';
   
  // menangkap data yang di kirim dari form
  $id = $_POST['id'];
	$jenis_mobil = $_POST['jenis_mobil'];
	$nama_mobil = $_POST['nama_mobil'];
	$stok_mobil = $_POST['stok_mobil'];
	$harga_mobil = $_POST['harga_mobil'];
   
  // update data ke database
  mysqli_query($koneksi, "UPDATE mobil SET id_jenis_mobil='$jenis_mobil', nama_mobil='$nama_mobil', stok_mobil='$stok_mobil', harga_mobil='$harga_mobil' WHERE id_mobil='$id'");
   
  // mengalihkan halaman kembali ke index.php
  header("location:index.php");
?>