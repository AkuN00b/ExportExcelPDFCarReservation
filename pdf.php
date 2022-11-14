<?php
include "./koneksi.php";
require('./fpdf184/fpdf.php');

$data = $_GET['search'];
$page = $_GET['page'];

$timezone = "Asia/Jakarta";
date_default_timezone_set($timezone);
$format = "%d_%m_%y %H_%M_%S";
$strf = strftime($format);

// Menampilkan data dari tabel di database
if ($page == "Transaksi Peminjaman") {  
  $result = mysqli_query($koneksi, "SELECT p.id_peminjaman, m.nama_mobil, p.tanggal_peminjaman, p.lama_peminjaman, p.harga_peminjaman
                                                 FROM peminjaman p
                                                 INNER JOIN mobil m ON m.id_mobil = p.id_mobil
                                                 WHERE (p.id_peminjaman LIKE '%" . $data . "%'
                                                 OR m.nama_mobil LIKE '%" . $data . "%'
                                                 OR p.tanggal_peminjaman LIKE '%" . $data . "%'
                                                 OR p.lama_peminjaman LIKE '%" . $data . "%'
                                                 OR p.harga_peminjaman LIKE '%" . $data . "%')");

  // Inisiasi untuk membuat header kolom
  $column_id = "";
  $column_nama = "";
  $column_jenis = "";
  $column_vendor = "";
  $column_jml_stok = "";

  // For each row, add the field to the corresponding column
  $no = 1;
  while ($row = mysqli_fetch_array($result))
  {
    $id = $no;
    $nama = $row['nama_mobil'];
    $jenis = $row['tanggal_peminjaman'];
    $vendor = $row['lama_peminjaman'] ." Hari";
    $jml_stok = $row['harga_peminjaman'];   

    $column_id = $column_id.$id."\n";
    $column_nama = $column_nama.$nama."\n";
    $column_jenis = $column_jenis.$jenis."\n";
    $column_vendor = $column_vendor.$vendor."\n";
    $column_jml_stok = $column_jml_stok.$jml_stok."\n";    

    $no++;

    // Create a new PDF file
  }

  $pdf = new FPDF('P', 'mm', array(210,297)); // L For Landscape / P For Portrait
  $pdf->AddPage();

  // Menambahkan Gambar
  // $pdf->Image('../foto/logo.png',10,10,-175);
  $pdf->SetFont('Arial', 'B', 13);
  $pdf->Cell(80);
  $pdf->Cell(30, 10, 'Data ' . $page, 0, 0, 'C');
  $pdf->Ln();

  $pdf->Cell(80);
  $pdf->Cell(30, 10, 'PT. Peminjaman Mobil', 0, 0, 'C');
  $pdf->Ln();

  $pdf->SetLeftMargin(24);

  // Fields Name position
  $Y_Fields_Name_position = 40;

  // First create each Field Name
  // Gray color filling each Field Name box
  $pdf->SetFillColor(110, 180, 230);

  // Bold Font for Field Name
  $pdf->SetFont('Arial', 'B', 10);
  $pdf->SetY($Y_Fields_Name_position);
  $pdf->Cell(25, 8, 'No', 1, 0, 'C', 1);
  $pdf->Cell(40, 8, 'Nama Mobil', 1, 0, 'C', 1);
  $pdf->Cell(25, 8, 'Tanggal Peminjaman', 1, 0, 'C', 1);
  $pdf->Cell(25, 8, 'Lama Peminjaman', 1, 0, 'C', 1);
  $pdf->Cell(50, 8, 'Harga Peminjaman', 1, 0, 'C', 1);
  $pdf->Ln();

  // Table position, under Fields Name
  $Y_Table_Position = 48;

  // Now show the columns
  $pdf->SetFont('Arial', '', 10);

  $pdf->SetY($Y_Table_Position);
  $pdf->SetX(24);
  $pdf->MultiCell(25, 6, $column_id, 1, 'C');

  $pdf->SetY($Y_Table_Position);
  $pdf->SetX(49);
  $pdf->MultiCell(40, 6, $column_nama, 1, 'C');

  $pdf->SetY($Y_Table_Position);
  $pdf->SetX(89);
  $pdf->MultiCell(25, 6, $column_jenis, 1, 'C');

  $pdf->SetY($Y_Table_Position);
  $pdf->SetX(114);
  $pdf->MultiCell(25, 6, $column_vendor, 1, 'C');

  $pdf->SetY($Y_Table_Position);
  $pdf->SetX(139);
  $pdf->MultiCell(50, 6, $column_jml_stok, 1, 'C');

  $pdf->Output('Data ' . $page . ' pada tanggal ' . $strf . '.pdf', 'I');
} 
?>