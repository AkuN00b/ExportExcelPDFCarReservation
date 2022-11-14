 <?php 
	// koneksi database
	include '../koneksi.php';
	 
	// menangkap data yang di kirim dari form
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$telp = $_POST['telp'];
	$email = $_POST['email'];
	 
	// menginput data ke database
	mysqli_query($koneksi,"INSERT INTO vendor (nama, alamat, telp, email, byUser) VALUES ('$nama', '$alamat', '$telp', '$email', '$id')");
	 
	// mengalihkan halaman kembali ke index.php
	header("location:vendor.php");
?>