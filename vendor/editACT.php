<?php 
  // koneksi database
  include '../koneksi.php';
   
  // menangkap data yang di kirim dari form
  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $telp = $_POST['telp'];
  $email = $_POST['email'];
   
  // update data ke database
  mysqli_query($koneksi, "UPDATE vendor SET nama='$nama', alamat='$alamat', telp='$telp', email='$email' WHERE id='$id'");
   
  // mengalihkan halaman kembali ke index.php
  header("location:vendor.php");
?>