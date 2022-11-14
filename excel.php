<?php
  require 'vendor/autoload.php';
  include "./koneksi.php";

  $data = $_GET['search'];
  $page = $_GET['page'];

  use PhpOffice\PhpSpreadsheet\Spreadsheet;
  use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

  $spreadsheet = new Spreadsheet();
  $sheet = $spreadsheet->getActiveSheet();

  $timezone = "Asia/Jakarta";
  date_default_timezone_set($timezone);
  $format = "%d_%m_%y %H_%M_%S";
  $strf = strftime($format);

  if ($page == "Transaksi Peminjaman") {
    // sheet pertama
    $sheet->setTitle('Sheet 1');
    $sheet->setCellValue('A1', 'No');
    $sheet->setCellValue('B1', 'Nama Mobil');
    $sheet->setCellValue('C1', 'Tanggal Peminjaman');
    $sheet->setCellValue('D1', 'Lama Peminjaman');
    $sheet->setCellValue('E1', 'Harga Peminjaman');

    // membaca data dari mysql
    $employee = mysqli_query($koneksi, "SELECT p.id_peminjaman, m.nama_mobil, p.tanggal_peminjaman, p.lama_peminjaman, p.harga_peminjaman
                                                 FROM peminjaman p
                                                 INNER JOIN mobil m ON m.id_mobil = p.id_mobil
                                                 WHERE (p.id_peminjaman LIKE '%" . $data . "%'
                                                 OR m.nama_mobil LIKE '%" . $data . "%'
                                                 OR p.tanggal_peminjaman LIKE '%" . $data . "%'
                                                 OR p.lama_peminjaman LIKE '%" . $data . "%'
                                                 OR p.harga_peminjaman LIKE '%" . $data . "%')");
    $row = 2;
    $no = 1;

    while ($record = mysqli_fetch_array($employee)) {
      $sheet->setCellValue('A'.$row, $no);
      $sheet->setCellValue('B'.$row, $record['nama_mobil']);
      $sheet->setCellValue('C'.$row, $record['tanggal_peminjaman']);
      $sheet->setCellValue('D'.$row, $record['lama_peminjaman'] ." Hari");
      $sheet->setCellValue('E'.$row, $record['harga_peminjaman']);

      $row++;
      $no++;
    }
  }


  $writer = new Xlsx($spreadsheet);
  ob_clean();
  $fileName = "Laporan_Excel_Data_" . $page . " " . $strf . ".xlsx";
  header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
  header("Content-Disposition: attachment;filename=" . $fileName);
  $writer->save("php://output");
?>